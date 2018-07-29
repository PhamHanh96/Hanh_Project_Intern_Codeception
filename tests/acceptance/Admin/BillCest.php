<?php
use Step\Acceptance\Admin\BillStep as BillStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;
class BillCest
{
    /**
     * BillCest constructor.
     */
    public function __construct()
    {
        $this->faker               = Faker\Factory::create();
        $this->username            = 'nguyentrang0912@gmail.com';
        $this->password            = '123';
        $this->randomCodeBill      = '3062';
    }
    /**
     * @param AdminLoginStep $I
     */
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }
    /**
     * @param BillStep $I
     * @throws Exception
     */
    public function checkBill(BillStep $I)
    {
        $I->checkBill($this->randomCodeBill);
    }
}
