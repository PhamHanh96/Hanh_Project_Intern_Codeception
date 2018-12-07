<?php
namespace Step\Acceptance\Admin;
use Page\Admin\SchedulePage as SchedulePage;

class ScheduleStep extends \AcceptanceTester
{
    /**
     * @param $user
     * @param $pass
     * @param $maTuyenDuong
     * @param $bangSoXe
     * @param $ngay
     * @param $gio
     * @throws \Exception
     */
    public function addScheduleDataTrue($user, $pass, $maTuyenDuong, $bangSoXe, $ngay, $gio)
    {
        $I = $this;
        $I->amOnPage(SchedulePage::$urlAdmin);
        $I->fillField(SchedulePage::$username, $user);
        $I->fillField(SchedulePage::$password, $pass);
        $I->click(SchedulePage::$loginButton);
        $I->amOnPage(SchedulePage::$urlSchedule);
        $I->click(SchedulePage::$newButton);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($maTuyenDuong), 30);
        $I->click($usePage->returnChoice($maTuyenDuong));
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($bangSoXe), 30);
        $I->click($usePage->returnChoice($bangSoXe));
        $I->fillField(SchedulePage::$day, $ngay);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($gio), 30);
        $I->click($usePage->returnChoice($gio));
        $I->click(SchedulePage::$addButton);
        $I->wait(1);
        $I->see(SchedulePage::$messageAddSuccess);
    }

    /**
     * @param $user
     * @param $pass
     * @param $maLoTrinh
     */
    public function searchSchedule($user, $pass, $maLoTrinh)
    {
        $I = $this;
        $I->amOnPage(SchedulePage::$urlAdmin);
        $I->fillField(SchedulePage::$username, $user);
        $I->fillField(SchedulePage::$password, $pass);
        $I->click(SchedulePage::$loginButton);
        $I->amOnPage(SchedulePage::$urlSchedule);
        $I->fillField(SchedulePage::$searchButton, $maLoTrinh);
        $I->wait(1);
    }

    /**
     * @param $user
     * @param $pass
     * @param $maLoTrinh
     * @param $maTuyenDuong
     * @param $bangSoXe
     * @param $ngay
     * @param $gio
     * @throws \Exception
     */
    public function editSchedule($user, $pass, $maLoTrinh, $maTuyenDuong, $bangSoXe, $ngay, $gio)
    {
        $I = $this;
        $I->searchSchedule($user, $pass, $maLoTrinh);
        $I->wait(1);
        $I->click(SchedulePage::$editIcon);
        $I->wait(1);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($maTuyenDuong), 30);
        $I->click($usePage->returnChoice($maTuyenDuong));
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($bangSoXe), 30);
        $I->click($usePage->returnChoice($bangSoXe));
        $I->fillField(SchedulePage::$day, $ngay);
        $usePage = new SchedulePage();
        $I->waitForElement($usePage->returnChoice($gio), 30);
        $I->click($usePage->returnChoice($gio));
        $I->click(SchedulePage::$updateButton);
        $I->wait(1);
        $I->see(SchedulePage::$messageUpdateSuccess);
    }

    /**
     * @param $user
     * @param $pass
     * @param $maLoTrinh
     * @throws \Exception
     */
    public function deleteScheduleCancel($user, $pass, $maLoTrinh)
    {
        $I = $this;
        $I->searchSchedule($user, $pass, $maLoTrinh);
        $I->waitForElement(SchedulePage::$deleteIcon, 30);
        $I->click(SchedulePage::$deleteIcon);
        $I->wait(1);
        $I->click(SchedulePage::$cancelButton);
        $I->see('Lộ Trình');
    }

    /**
     * @param $user
     * @param $pass
     * @param $maLoTrinh
     * @throws \Exception
     */
    public function deleteScheduleOK($user, $pass, $maLoTrinh)
    {
        $I = $this;
        $I->searchSchedule($user, $pass, $maLoTrinh);
        $I->waitForElement(SchedulePage::$deleteIcon, 30);
        $I->click(SchedulePage::$deleteIcon);
        $I->wait(1);
        $I->click(SchedulePage::$continueButton);
        $I->wait(1);
    }
}