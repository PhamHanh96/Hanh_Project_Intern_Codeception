<?php
namespace Step\Acceptance\admin;
use Page\Admin\BusPage as BusPage;

class BusStep extends \AcceptanceTester
{

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

}