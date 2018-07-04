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
        $I->click(SchedulePage::$codeRoute);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($codeRoute), 30);
        $I->click($usePage->returnChoice($codeRoute));
        $I->pauseExecution();
        $I->wait(1);

        $I->click(SchedulePage::$licensePlates);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($licensePlates));
        $I->click($usePage->returnChoice($licensePlates));
        $I->pauseExecution();

        $I->fillField(SchedulePage::$dayStart, $dayStart);
        //$I->pauseExecution();

        $I->click(SchedulePage::$Time);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($Time));
        $I->click($usePage->returnChoice($Time));
        //$I->pauseExecution();

        $I->click(SchedulePage::$buttonAddNew);
        $I->see(SchedulePage::$messageSaveSuccess);
        $I->pauseExecution();

    }

}