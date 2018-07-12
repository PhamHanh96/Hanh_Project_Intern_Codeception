<?php
use Step\Acceptance\Admin\BusStep as BusStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;


class BusCest
{
    public function __construct()
    {
        $this->faker                = Faker\Factory::create();
        $this->username             = 'nguyentrang0912@gmail.com';
        $this->password             = '123';
        $this->randomLicensePlates  = $this->faker->bothify('##?-####');
        $this->randomSeats          = rand(16,60);
    }
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }

    public function createBus(BusStep $I)
    {
        $I->addBus($this->randomLicensePlates, $this->randomSeats);
    }
}
