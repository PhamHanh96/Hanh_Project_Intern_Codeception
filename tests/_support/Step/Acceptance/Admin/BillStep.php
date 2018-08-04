<?php
namespace Step\Acceptance\Admin;
use Page\Admin\BillPage;
use Step\Acceptance\User\UserBookTicketStep;

class BillStep extends UserBookTicketStep
{
    /**
     * @param $codeBill
     */
    public function searchBill($codeBill)
    {
        $I = $this;
        $I->wantTo('Search Bill!');
        $I->fillField(BillPage::$buttonSearch, $codeBill);
    }
    /**
     * @param $codeBill
     * @throws \Exception
     */
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
        $I->waitForElement(BillPage::$iconCheckBill);
        $I->click(BillPage::$iconCheckBill);
        $I->waitForElementVisible(BillPage::$buttonContinue,30);
        $I->wantTo('Test with check bill then accept');
        $I->click(BillPage::$buttonContinue);
        $I->acceptPopup();
    }
}