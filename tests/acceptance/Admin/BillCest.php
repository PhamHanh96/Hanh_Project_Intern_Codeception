<?php
use Step\Acceptance\Admin\BillStep as BillStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;
class BillCest
{
    public function __construct()
    {
        $this->faker               = Faker\Factory::create();
        $this->username            = 'nguyentrang0912@gmail.com';
        $this->password            = '123';
        $this->randomCodeBill      = '3046';
    }
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }
    public function checkBuill(BillStep $I)
    {
        $I->checkBill($this->randomCodeBill);
    }
}
