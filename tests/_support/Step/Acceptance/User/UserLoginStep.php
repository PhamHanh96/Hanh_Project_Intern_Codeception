<?php
namespace Step\Acceptance\user;
use Page\User\UserLoginPage as UserLoginPage;
class UserLoginStep extends \AcceptanceTester
{
    /**
     * @param $email
     * @param $password
     */
    public function Login($email, $password)
    {
        $I = $this;
        $I->wantTo('Login in website');
        $I->amOnPage(UserLoginPage::$URL);
        $I->click(UserLoginPage::$buttonLogIn);
        $I->fillField(UserLoginPage::$email, $email);
        $I->fillField(UserLoginPage::$password, $password);
        $I->click(UserLoginPage::$buttonSubmitLogin);
    }
    public function Logout()
    {
        $I = $this;
        $I->wantTo('Logout this account');
        $I->click(UserLoginPage::$buttonLogOut);
    }
}