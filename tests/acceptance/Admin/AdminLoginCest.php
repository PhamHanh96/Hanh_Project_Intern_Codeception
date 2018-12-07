<?php

use  Step\Acceptance\Admin\AdminLoginStep as loginAccount;
use Page\Admin\AdminLoginPage as AdminLoginPage;
class AdminLoginCest
{
    /**
     * @param loginAccount $I
     */
    public function loginWithUserTruePassTrue(LoginAccount $I)
    {
        $I->wantTo('Login với Username đúng, Password đúng');
        $I->loginWithUserTruePassTrue(AdminLoginPage::$usernameTrue , AdminLoginPage::$passwordTrue);
    }

    /**
     * @param loginAccount $I
     */
    public function loginWithUserTruePassFail(LoginAccount $I)
    {
        $I->wantTo('Login với Username đúng, Password sai');
        $I->loginWithUserTruePassFail(AdminLoginPage::$usernameTrue , AdminLoginPage::$passwordFail);
    }

    /**
     * @param loginAccount $I
     */
    public function loginWithUserFailPassTrue(LoginAccount $I)
    {
        $I->wantTo('Login với Username sai, Password đúng');
        $I->loginWithUserFailPassTrue(AdminLoginPage::$usernameFail , AdminLoginPage::$passwordTrue);
    }

    /**
     * @param loginAccount $I
     */
    public function loginWithUserFailPassFail(LoginAccount $I)
    {
        $I->wantTo('Login với Username sai, Password sai');
        $I->loginWithUserFailPassFail(AdminLoginPage::$usernameFail , AdminLoginPage::$passwordFail);
    }

    /**
     * @param loginAccount $I
     * @throws Exception
     */
    public function logout(LoginAccount $I)
    {
        $I->wantTo('Thoát ra ngoài tài khoản Admin');
        $I->logout(AdminLoginPage::$usernameTrue , AdminLoginPage::$passwordTrue);
    }


}
