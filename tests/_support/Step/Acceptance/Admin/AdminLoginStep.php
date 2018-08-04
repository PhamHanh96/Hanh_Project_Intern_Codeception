<?php
namespace Step\Acceptance\Admin;
use Page\Admin\AdminLoginPage as AdminLoginPage;

class AdminLoginStep extends \AcceptanceTester
{
    /**
     * @param $user
     * @param $pass
     */
    public function loginAccount($user, $pass)
    {
        $I = $this;
        $I->wantTo('Login into Admin account');
        $I->amOnPage(AdminLoginPage::$url);
        $I->fillField(AdminLoginPage::$username, $user);
        $I->fillField(AdminLoginPage::$password, $pass);
        $I->click(AdminLoginPage::$loginButton);
    }
    /**
     * @param $name
     * @param $phone
     * @param $idAdmin
     * @param $address
     * @param $pass
     * @param $confirmPass
     */
    public function editInformation($name, $phone, $idAdmin, $address, $pass, $confirmPass)
    {
        $I = $this;
        $I->wantTo('Edit information this account');
        $I->click(AdminLoginPage::$iconUser);
        $I->click(AdminLoginPage::$editInformation);
        $I->see('Xem thông tin cá nhân ');
        $I->fillField(AdminLoginPage::$name, $name);
        $I->fillField(AdminLoginPage::$phone, $phone);
        $I->fillField(AdminLoginPage::$idAdmin, $idAdmin);
        $I->fillField(AdminLoginPage::$address, $address);
        $I->fillField(AdminLoginPage::$pass, $pass);
        $I->fillField(AdminLoginPage::$confirmPass, $confirmPass);
        $I->click(AdminLoginPage::$buttonUpdate);
        $I->see(AdminLoginPage::$messageSuccess);
    }
	/**
	 * @throws \Exception
	 */
    public function logoutAccount()
    {
        $I = $this;
        $I->wantTo('Logout this account');
        $I->click(AdminLoginPage::$iconUser);
        $I->waitForElement(AdminLoginPage::$buttonLogout);
        $I->click(AdminLoginPage::$buttonLogout);
    }

}
