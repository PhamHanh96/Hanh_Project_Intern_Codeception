<?php

use  Step\Acceptance\Admin\AdminLoginStep as loginAccount;

class AdminLoginCest
{
    /**
     * AdminLoginCest constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->faker                     = Faker\Factory::create();
        $this->username                  = 'nguyentrang0912@gmail.com';
        $this->password                  = '123';
        $this->randomName                = $this->faker->bothify('???????????');
        $this->randomPhone               = $this->faker->bothify('01#########');
        $this->randomIdAdmin             = random_int(100000000,999999999);
        $this->randomAddress             = $this->faker->address;
        $this->randomPassword           = '123';
        $this->randomConfirmPassword    = '123';
    }
    /**
     * @param loginAccount $I
     */
    public function _before(LoginAccount $I)
    {
        $I->loginAccount($this->username, $this->password);
    }
    /**
     * @param loginAccount $I
     */
    public function editAccount(LoginAccount $I)
    {
        $I->editInformation($this->randomName, $this->randomPhone, $this->randomIdAdmin, $this->randomAddress, $this->randomPassword, $this->randomConfirmPassword);
    }
    /**
     * @param loginAccount $I
     */
    public function logoutAccount(LoginAccount $I)
    {
        $I->logoutAccount();
    }
}
