<?php
use Step\Acceptance\Admin\BusStep as BusStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;
class BusCest
{
    /**
     * BusCest constructor.
     */
    public function __construct()
    {
        $this->faker                = Faker\Factory::create();
        $this->username             = 'nguyentrang0912@gmail.com';
        $this->password             = '123';
        $this->randomLicensePlates  = $this->faker->bothify('##?-####');
        $this->randomSeats          = rand(16,60);
    }
    /**
     * @param AdminLoginStep $I
     */
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }
	/**
	 * @param BusStep $I
	 * @throws Exception
	 *
	 */
    public function createBus(BusStep $I)
    {
		$I->wantTo('Add new bus');
        $I->addBus($this->randomLicensePlates, $this->randomSeats);
    }
	/**
	 * @param BusStep $I
	 * @throws Exception
	 */
    public function editBus(BusStep $I)
    {
    	$I->wantTo('Edit this bus');
        $I->editBus($this->randomLicensePlates,$this->randomSeats);
    }
    /**
     * @param BusStep $I
     * @throws Exception
     */
    public function deleteBus(BusStep $I)
    {
        $I->wantTo('Delete this Bus!');
        $I->deleteBus($this->randomLicensePlates);
    }
}
