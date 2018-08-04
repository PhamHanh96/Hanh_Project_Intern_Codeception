<?php
namespace Step\Acceptance\admin;
use Page\Admin\BusPage as BusPage;

class BusStep extends \AcceptanceTester
{
	/**
	 * @param $licensePlates
	 * @param $seats
	 * @throws \Exception
	 */
    public function addBus($licensePlates, $seats)
    {
        $I = $this;
        $I->wantTo('Creat new Bus');
        $I->amOnPage(BusPage::$URL);
        $I->click(BusPage::$buttonNew);
        $I->fillField(BusPage::$licensePlates, $licensePlates);
        $I->fillField(BusPage::$seats, $seats);
        $I->click(BusPage::$buttonAddNew);
        $I->see(BusPage::$messageSaveSuccess);
    }
    /**
     * @param $licensePlates
     */
    public function searchBus($licensePlates)
    {
        $I = $this;
        $I->wantTo('Search Bus!');
        $I->fillField(BusPage::$buttonSearch, $licensePlates);
    }
	/**
	 * @param $licensePlates
	 * @param $seats
	 * @throws \Exception
	 */
    public function editBus($licensePlates, $seats)
    {
        $I = $this;
        $I->wantTo('Edit this Bus');
        $I->amOnPage(BusPage::$URL);
        $I->searchBus($licensePlates);
        $I->click(BusPage::$iconEdit);
        $I->fillField(BusPage::$seats, $seats);
        $I->click(BusPage::$buttonAddNew);
        $I->see(BusPage::$messageSaveSuccess1);
    }
    /**
     * @param $licensePlates
     * @throws \Exception
     */
    public function deleteBus($licensePlates)
    {
        $I = $this;
        $I->amOnPage(BusPage::$URL);
        $I->searchBus($licensePlates);
        $I->click(BusPage::$iconDelete);
        //$I->see(BusPage::$messageDelete);
        //$I->wantTo('Test with delete bus but then cancel');
        //$I->click(BusPage::$buttonCancel);
        //$I->waitForElement(BusPage::$iconDelete);
        //$I->click(BusPage::$iconDelete);
        //$I->wantTo('Test with delete bus then accept');
		$I->waitForElement(BusPage::$buttonContinue);
        $I->click(BusPage::$buttonContinue);
        $I->acceptPopup();
    }
}