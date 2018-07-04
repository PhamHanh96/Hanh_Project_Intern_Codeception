<?php
use Step\Acceptance\User\UserLoginStep as UserLoginStep;
use Step\Acceptance\User\RegisterStep as RegisterStep;
class UserLoginCest
{
    public function __construct()
    {
        $this->fake                     = Faker\Factory::create();
        $this->randomUsername           = 'Pham Thi Hanh';
        $this->randomEmail              = 'hanh'. random_int(100,999).'@gmail.com';
        $this->randomPhoneNumber        = '0166' .random_int(100000,9999999);
        $this->randomIdCustomer         = random_int(100000000,999999999);
        $this->randomAddress            = 'ADC' .random_int(100,999);
        $this->randomPassword           = 'admin123';
        $this->randomConfirmPassword    = 'admin123';

    }

    public function testRegister(AcceptanceTester $I, $scenario)
    {
        $I = new RegisterStep($scenario);
        $I->wantTo('Create new Account!');
        $I->register($this->randomUsername, $this->randomEmail, $this->randomPhoneNumber, $this->randomIdCustomer, $this->randomAddress, $this->randomPassword, $this->randomConfirmPassword);
    }

    public function Login(UserLoginStep $I)
    {
        $I->Login($this->randomEmail, $this->randomPassword);
    }


}
