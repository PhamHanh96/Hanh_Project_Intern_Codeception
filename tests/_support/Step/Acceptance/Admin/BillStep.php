<?php
namespace Step\Acceptance\Admin;
use Page\Admin\BillPage as BillPage;
use Page\User\UserBookTicketPage as UserBookTicketPage;
class BillStep extends \AcceptanceTester
{
    public function searchBill($codeBill)
    {
        $I = $this;
        $I->wantTo('Search Bill!');
        $I->fillField(BillPage::$buttonSearch, $codeBill);
    }
    public function checkBill($codeBill)
    {
        $I = $this;
        $I->wantTo('Check Bill!');
        $I->amOnPage(BillPage::$URL);
        $I->searchBill($codeBill);
        $I->click(BillPage::$iconCheckBill);
        $I->wantTo('Test with check bill but then cancel');
        $I->waitForElementVisible(BillPage::$buttonCancle,30);
        $I->click(BillPage::$buttonCancle);
        $I->wait('1');
        $I->click(BillPage::$iconCheckBill);
        $I->waitForElementVisible(BillPage::$buttonContinue,30);
        $I->wantTo('Test with check bill then accept');
        $I->click(BillPage::$buttonContinue);
        $I->wait(1);
        $I->acceptPopup();

    }
}