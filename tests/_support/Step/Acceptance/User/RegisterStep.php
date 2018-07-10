<?php
namespace Step\Acceptance\User;
use Page\User\RegisterPage as RegisterPage;

class RegisterStep extends \AcceptanceTester
{

    public function register($username, $email, $phoneNumber, $idCustomer, $address, $password, $confirmPassword)
    {
        $I=$this;
        $I->wantTo("Register member!");
        $I->amOnPage(RegisterPage::$URL);
        $I->click(RegisterPage::$buttonRegister);
        $I->fillField(RegisterPage::$username, $username);
        $I->fillField(RegisterPage::$email, $email);
        $I->fillField(RegisterPage::$phoneNumber, $phoneNumber);
        $I->fillField(RegisterPage::$idCustomer, $idCustomer);
        $I->fillField(RegisterPage::$address, $address);
        $I->fillField(RegisterPage::$password, $password);
        $I->fillField(RegisterPage::$confirmPassword, $confirmPassword);
        $I->click(RegisterPage::$buttonSubmitRegister);
        $I->see(RegisterPage::$messageSaveSuccess);
    }

}