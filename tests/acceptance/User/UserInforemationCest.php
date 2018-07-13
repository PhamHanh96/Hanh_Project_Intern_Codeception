<?php

use Step\Acceptance\User\UserLoginStep as UserLoginStep;
use Step\Acceptance\User\UserInformationStep as UserInformationStep;

class UserInforemationCest
{
    /**
     * UserInforemationCest constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->faker                     = Faker\Factory::create();
        $this->email                    = 'hanhhana041096@gmail.com';
        $this->pass                     = '123';
        $this->randomUsername           = $this->faker->bothify('???????????');
        $this->randomPhoneNumber        = $this->faker->bothify('01#########');
        $this->randomIdCustomer         = random_int(100000000,999999999);
        $this->randomAddress            = $this->faker->address;
        $this->randomPassword           = '123';
        $this->randomConfirmPassword    = '123';
    }
    /**
     * @param UserLoginStep $I
     */
    public function _before(UserLoginStep $I)
    {
        $I->wantTo('Login Website');
        $I->Login($this->email, $this->pass);
    }
    /**
     * @param UserInformationStep $I
     */
    public function UserInformation(UserInformationStep $I)
    {
        $I->EditInformation($this->randomUsername, $this->randomPhoneNumber, $this->randomIdCustomer, $this->randomAddress, $this->randomPassword, $this->randomConfirmPassword);
        $I->ViewInformation();
    }
}
