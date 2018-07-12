<?php
namespace Step\Acceptance\Admin;
use Page\Admin\SchedulePage as SchedulePage;

class ScheduleStep extends \AcceptanceTester
{

    /**
     * @param $maTuyenDuong
     * @param $bangSoXe
     * @param $ngayDi
     * @param $gioChay
     * @throws \Exception
     */
    public function addSchedule($codeRoute, $licensePlates, $dayStart, $Time)
    {
        $I = $this;
        $I->wantTo('Creat new Schedule');
        $I->amOnPage(SchedulePage::$url);
        $I->click(SchedulePage::$buttonNew);
        $I->waitForElement(SchedulePage::$codeRoute, 30);
        $I->click(SchedulePage::$codeRoute);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($codeRoute), 30);
        $I->click($usePage->returnChoice($codeRoute));

        $I->waitForElement(SchedulePage::$licensePlates, 30);
        $I->click(SchedulePage::$licensePlates);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($licensePlates));
        $I->click($usePage->returnChoice($licensePlates));
        $I->fillField(SchedulePage::$dayStart, $dayStart);
        $I->click(SchedulePage::$Time);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($Time));
        $I->click($usePage->returnChoice($Time));
        $I->wait('1');
        $I->click(SchedulePage::$buttonAddNew);
        $I->see(SchedulePage::$messageSaveSuccess);

    }

    public function searchSchedule($codeRoute)
    {
        $I = $this;
        $I->wantTo('Search Schedule!');
        $I->fillField(SchedulePage::$buttonSearch, $codeRoute);
    }

    /**
     * @param $codeRoute
     * @param $dayStart
     * @param $Time
     * @throws \Exception
     */
    public function editSchedule($codeRoute, $dayStart, $Time)
    {
        $I = $this;
        $I->wantTo('Edit Schedule!');
        $I->amOnPage(SchedulePage::$url);
        $I->searchSchedule($codeRoute);
        $I->click(SchedulePage::$iconEdit);
        $I->wait('1');
        $I->fillField(SchedulePage::$dayStart, $dayStart);
        $I->click(SchedulePage::$Time);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($Time));
        $I->click($usePage->returnChoice($Time));
        $I->click(SchedulePage::$buttonAddNew);
        $I->see(SchedulePage::$messageSaveSuccess1);

    }

    /**
     * @param $codeRoute
     * @throws \Exception
     */
    public function deleteSchedule($codeRoute)
    {
        $I = $this;
        $I->wantTo('Delete Schedule!');
        $I->amOnPage(SchedulePage::$url);
        $I->searchSchedule($codeRoute);

        $I->click(SchedulePage::$iconDelete);
        $I->wantTo('Test with delete schedule but then cancel');
        $I->waitForElementVisible(SchedulePage::$buttonCancle,30);
        $I->click(SchedulePage::$buttonCancle);
        $I->wait('1');

        $I->click(SchedulePage::$iconDelete);
        $I->waitForElementVisible(SchedulePage::$buttonContinue,30);
        $I->wantTo('Test with delete schedule then accept');
        $I->click(SchedulePage::$buttonContinue);
        $I->wait(1);
        $I->acceptPopup();
    }
}