<?php
namespace Step\Acceptance\Admin;
use Page\Admin\BillPage;

class BillStep extends \AcceptanceTester
{
    /**
     * @param $user
     * @param $pass
     * @param $codeBill
     * @throws \Exception
     */
    public function searchBillWithDataTrue($user, $pass, $codeBill)
    {
        $I = $this;
        $I->amOnPage(BillPage::$urlAdmin);
        $I->fillField(BillPage::$username, $user);
        $I->fillField(BillPage::$password, $pass);
        $I->click(BillPage::$loginButton);
        $I->amOnPage(BillPage::$urlBill);
        $I->waitForElement(BillPage::$searchButton, 30);
        $I->fillField(BillPage::$searchButton, $codeBill);
    }

    /**
     * @param $user
     * @param $pass
     * @param $codeBill
     * @throws \Exception
     */
    public function searchBillWithDataWrong($user, $pass, $codeBill)
    {
        $I = $this;
        $I->amOnPage(BillPage::$urlAdmin);
        $I->fillField(BillPage::$username, $user);
        $I->fillField(BillPage::$password, $pass);
        $I->click(BillPage::$loginButton);
        $I->amOnPage(BillPage::$urlBill);
        $I->waitForElement(BillPage::$searchButton, 30);
        $I->fillField(BillPage::$searchButton, $codeBill);
        $I->see(BillPage::$messageSearch);
    }

    /**
     * @param $user
     * @param $pass
     * @param $codeBill
     * @throws \Exception
     */
    public function checkBillWithCancel($user, $pass, $codeBill)
    {
        $I = $this;
        $I->searchBillWithDataTrue($user, $pass, $codeBill);
        $I->waitForElement(BillPage::$editIcon, 30);
        $I->click(BillPage::$editIcon);
        $I->wait(1);
        $I->click(BillPage::$cancelButton);
        $I->see('Hóa đơn');
    }

    /**
     * @param $user
     * @param $pass
     * @param $codeBill
     * @throws \Exception
     */
    public function checkBillWithOK($user, $pass, $codeBill)
    {
        $I = $this;
        $I->searchBillWithDataTrue($user, $pass, $codeBill);
        $I->waitForElement(BillPage::$editIcon, 30);
        $I->click(BillPage::$editIcon);
        $I->wait(1);
        $I->click(BillPage::$continueButton);
        $I->wait(1);
    }
}