<?php
namespace Step\Acceptance\Admin;
use Page\Admin\AdminLoginPage as AdminLoginPage;

class AdminLoginStep extends \AcceptanceTester
{
    public function loginAccount($user, $pass)
    {
        $I = $this;
        $I->wantTo('Login into Admin account');
        $I->amOnPage(AdminLoginPage::$url);
        $I->fillField(AdminLoginPage::$username, $user);
        $I->fillField(AdminLoginPage::$password, $pass);
        $I->click(AdminLoginPage::$loginButton);
    }

    public function editInformation($name, $phone, $idAdmin, $address, $pass, $confirmPass)
    {
        $I = $this;
        $I->wantTo('Edit information this account');
        $I->amOnPage(AdminLoginPage::$passwordValue);

    }

    public function logoutAccount()
    {

    }

}