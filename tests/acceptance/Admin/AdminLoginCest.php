<?php

use  Step\Acceptance\Admin\AdminLoginStep as loginAccount;

class AdminLoginCest
{
    public function __construct()
    {
        $this->faker                     = Faker\Factory::create();
        $this->username                  = 'nguyentrang0912@gmail.com';
        $this->password                  = '123';

    }

    public function LoginAdmin(LoginAccount $I)
    {
        $I->loginAccount($this->username, $this->password);
    }

}
