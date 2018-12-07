<?php
namespace Step\Acceptance\Admin;
use Page\Admin\AdminLoginPage as AdminLoginPage;

class AdminLoginStep extends \AcceptanceTester
{
    /**
     * @param $user
     * @param $pass
     */
    public function loginWithUserTruePassTrue($user, $pass)
    {
        AdminLoginPage::setProperties();
        $I = $this;
        $I->amOnPage(AdminLoginPage::$url);
        $I->fillField(AdminLoginPage::$username, $user);
        $I->fillField(AdminLoginPage::$password, $pass);
        $I->click(AdminLoginPage::$loginButton);
    }

    /**
     * @param $user
     * @param $pass
     */
    public function loginWithUserTruePassFail($user, $pass)
    {
        AdminLoginPage::setProperties();
        $I = $this;
        $I->amOnPage(AdminLoginPage::$url);
        $I->fillField(AdminLoginPage::$username, $user);
        $I->fillField(AdminLoginPage::$password, $pass);
        $I->click(AdminLoginPage::$loginButton);
        $I->see(AdminLoginPage::$messageLogin1);
    }

    /**
     * @param $user
     * @param $pass
     */
    public function loginWithUserFailPassTrue($user, $pass)
    {
        AdminLoginPage::setProperties();
        $I = $this;
        $I->amOnPage(AdminLoginPage::$url);
        $I->fillField(AdminLoginPage::$username, $user);
        $I->fillField(AdminLoginPage::$password, $pass);
        $I->click(AdminLoginPage::$loginButton);
        $I->see(AdminLoginPage::$messageLogin2);
    }

    /**
     * @param $user
     * @param $pass
     */
    public function loginWithUserFailPassFail($user, $pass)
    {
        AdminLoginPage::setProperties();
        $I = $this;
        $I->amOnPage(AdminLoginPage::$url);
        $I->fillField(AdminLoginPage::$username, $user);
        $I->fillField(AdminLoginPage::$password, $pass);
        $I->click(AdminLoginPage::$loginButton);
        $I->see(AdminLoginPage::$messageLogin3);
    }
	/**
	 * @throws \Exception
	 */
    public function logout($user, $pass)
    {
        $I = $this;
        $I->amOnPage(AdminLoginPage::$url);
        $I->fillField(AdminLoginPage::$username, $user);
        $I->fillField(AdminLoginPage::$password, $pass);
        $I->click(AdminLoginPage::$loginButton);
        $I->wait(1);
        $I->click(AdminLoginPage::$userIcon);
        $I->waitForElement(AdminLoginPage::$logoutButton);
        $I->click(AdminLoginPage::$logoutButton);
    }
}
