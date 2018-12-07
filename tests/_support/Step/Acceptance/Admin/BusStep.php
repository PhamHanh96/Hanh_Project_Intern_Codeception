<?php
namespace Step\Acceptance\admin;
use Page\Admin\BusPage as BusPage;

class BusStep extends \AcceptanceTester
{
    /**
     * @param $user
     * @param $pass
     * @param $bangSoXe
     * @param $soCho
     */
    public function addBusWithDataTrue($user, $pass, $bangSoXe, $soCho)
    {
        $I = $this;
        $I->amOnPage(BusPage::$urlAdmin);
        $I->fillField(BusPage::$username, $user);
        $I->fillField(BusPage::$password, $pass);
        $I->click(BusPage::$loginButton);
        $I->amOnPage(BusPage::$urlBus);
        $I->click(BusPage::$newButton);
        $I->fillField(BusPage::$licensePlates, $bangSoXe);
        $I->fillField(BusPage::$seats, $soCho);
        $I->click(BusPage::$addButton);
        $I->wait(1);
        $I->see(BusPage::$messageAddSuccess);
    }

    /**
     * @param $user
     * @param $pass
     */
    public function addBusWithMissingData($user, $pass)
    {
        $I = $this;
        $I->amOnPage(BusPage::$urlAdmin);
        $I->fillField(BusPage::$username, $user);
        $I->fillField(BusPage::$password, $pass);
        $I->click(BusPage::$loginButton);
        $I->amOnPage(BusPage::$urlBus);
        $I->click(BusPage::$newButton);
        $I->click(BusPage::$addButton);
        $I->wait(1);
        $I->see(BusPage::$messageMissingData);
    }

    /**
     * @param $user
     * @param $pass
     * @param $bangSoXe
     * @param $soCho
     */
    public function addBusWithDataDuplicate($user, $pass, $bangSoXe, $soCho)
    {
        $I = $this;
        $I->amOnPage(BusPage::$urlAdmin);
        $I->fillField(BusPage::$username, $user);
        $I->fillField(BusPage::$password, $pass);
        $I->click(BusPage::$loginButton);
        $I->amOnPage(BusPage::$urlBus);
        $I->click(BusPage::$newButton);
        $I->fillField(BusPage::$licensePlates, $bangSoXe);
        $I->fillField(BusPage::$seats, $soCho);
        $I->click(BusPage::$addButton);
        $I->wait(1);
        $I->see(BusPage::$messageDuplicateLicensePlates);
    }

    /**
     * @param $user
     * @param $pass
     * @param $bangSoXe
     */
    public function addBusWithMissingLicensePlates($user, $pass, $bangSoXe)
    {
        $I = $this;
        $I->amOnPage(BusPage::$urlAdmin);
        $I->fillField(BusPage::$username, $user);
        $I->fillField(BusPage::$password, $pass);
        $I->click(BusPage::$loginButton);
        $I->amOnPage(BusPage::$urlBus);
        $I->click(BusPage::$newButton);
        $I->fillField(BusPage::$seats, $bangSoXe);
        $I->click(BusPage::$addButton);
        $I->wait(1);
        $I->see(BusPage::$messageMissingLicensePlates);
    }

    /**
     * @param $user
     * @param $pass
     * @param $bangSoXe
     */
    public function searchFail($user, $pass, $bangSoXe)
    {
        $I = $this;
        $I->amOnPage(BusPage::$urlAdmin);
        $I->fillField(BusPage::$username, $user);
        $I->fillField(BusPage::$password, $pass);
        $I->click(BusPage::$loginButton);
        $I->amOnPage(BusPage::$urlBus);
        $I->fillField(BusPage::$searchButton, $bangSoXe);
        $I->wait(1);
        $I->see(BusPage::$messageSearch);
    }

    /**
     * @param $user
     * @param $pass
     * @param $bangSoXe
     */
    public function searchTrue($user, $pass, $bangSoXe)
    {
        $I = $this;
        $I->amOnPage(BusPage::$urlAdmin);
        $I->fillField(BusPage::$username, $user);
        $I->fillField(BusPage::$password, $pass);
        $I->click(BusPage::$loginButton);
        $I->amOnPage(BusPage::$urlBus);
        $I->fillField(BusPage::$searchButton, $bangSoXe);
        $I->wait(1);
    }

    /**
     * @param $user
     * @param $pass
     * @param $bangSoXe
     * @param $bangSoXeSua
     * @param $soChoSua
     * @throws \Exception
     */
    public function editBusVerifyData($user, $pass, $bangSoXe, $bangSoXeSua, $soChoSua)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $bangSoXe);
        $I->wait(1);
        $I->click(BusPage::$editIcon);
        $I->waitForElement(BusPage::$licensePlates, 30);
        $I->fillField(BusPage::$licensePlates, $bangSoXeSua);
        $I->fillField(BusPage::$seats, $soChoSua);
        $I->click(BusPage::$updateButton);
        $I->wait(1);
        $I->see(BusPage::$messageUpdateSuccess);
    }

    /**
     * @param $user
     * @param $pass
     * @param $bangSoXe
     * @throws \Exception
     */
    public function deleteCancel($user, $pass, $bangSoXe)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $bangSoXe);
        $I->waitForElement(BusPage::$deleteIcon, 30);
        $I->click(BusPage::$deleteIcon);
        $I->wait(1);
        $I->click(BusPage::$cancelButton);
        $I->see('Xe Khách');
    }

    /**
     * @param $user
     * @param $pass
     * @param $bangSoXe
     * @throws \Exception
     */
    public function deleteOK($user, $pass, $bangSoXe)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $bangSoXe);
        $I->waitForElement(BusPage::$deleteIcon, 30);
        $I->click(BusPage::$deleteIcon);
        $I->wait(1);
        $I->click(BusPage::$continueButton);
        $I->wait(1);
    }
}