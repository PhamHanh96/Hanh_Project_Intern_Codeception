<?php

use Step\Acceptance\User\UserLoginStep as UserLoginStep;
use Step\Acceptance\User\UserInformationStep as UserInformationStep;

class UserInforemationCest
{
    public function __construct()
    {
        $this->fake                     = Faker\Factory::create();
        $this->randomUsername           = 'HanhHana';
        $this->randomPhoneNumber        = '0166' .random_int(100000,9999999);
        $this->randomIdCustomer         = random_int(100000000,999999999);
        $this->randomAddress            = 'ADC' .random_int(100,999);
        $this->randomPassword           = '123';
        $this->randomConfirmPassword    = '123';

    }

    public function _before(UserLoginStep $I)
    {
        $I->wantTo('Login Website');
        $I->Login('hanhhana041096@gmail.com', '123');
    }

    public function UserInformation(UserInformationStep $I)
    {
        $I->EditInformation($this->randomUsername, $this->randomPhoneNumber, $this->randomIdCustomer, $this->randomAddress, $this->randomPassword, $this->randomConfirmPassword);
        $I->pauseExecution();
        $I->ViewInformation();
    }


}
