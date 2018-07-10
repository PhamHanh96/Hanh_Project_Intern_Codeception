<?php
namespace Step\Acceptance\User;
use Page\User\UserInformationPage as UserInformationPage;

class UserInformationStep extends \AcceptanceTester
{

    public function EditInformation($username, $phoneNumber, $idCustomer, $address, $password, $confirmPassword)
    {
        $I = $this;
        $I->wantTo('Edit information!');
        $I->amOnPage(UserInformationPage::$URL);
        $I->click(UserInformationPage::$buttonCustomer);
        $I->fillField(UserInformationPage::$username, $username);
        $I->fillField(UserInformationPage::$phoneNumber, $phoneNumber);
        $I->fillField(UserInformationPage::$idCustomer, $idCustomer);
        $I->fillField(UserInformationPage::$address, $address);
        $I->fillField(UserInformationPage::$password, $password);
        $I->fillField(UserInformationPage::$confirmPassword, $confirmPassword);
        $I->click(UserInformationPage::$buttonUpdate);
    }

    public function ViewInformation()
    {
        $I = $this;
        $I->wantTo('View my information!');
        $I->amOnPage(UserInformationPage::$URL);
        $I->click(UserInformationPage::$buttonInformation);
    }

}