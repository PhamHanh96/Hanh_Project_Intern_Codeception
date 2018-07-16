<?php
namespace Step\Acceptance\Admin;
use Page\Admin\BillPage as BillPage;
class BillStep extends \AcceptanceTester
{
    public function searchBill($licensePlates)
    {
        $I = $this;
        $I->wantTo('Search Bus!');
        $I->fillField(BusPage::$buttonSearch, $licensePlates);
    }
}