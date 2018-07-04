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
        //click on Login button
        $I->click(AdminLoginPage::$loginButton);
        $I->pauseExecution();

    }

}