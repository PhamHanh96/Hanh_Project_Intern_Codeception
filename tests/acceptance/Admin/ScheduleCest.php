<?php

use Step\Acceptance\Admin\ScheduleStep as ScheduleStep;
use Step\Acceptance\Admin\BusStep as BusStep;
use Step\Acceptance\Admin\RouteStep as RouteStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;

class ScheduleCest
{
    /**
     * ScheduleCest constructor.
     */
    public function __construct()
    {
        $this->faker                 = Faker\Factory::create();
        $this->username             = 'nguyentrang0912@gmail.com';
        $this->password             = '123';
        $this->randomCodeRoute      = $this->faker->bothify('CodeRoute#?#?');
        $this->randomWhereTo        = $this->faker->bothify('WhereTo#?#?');
        $this->randomWhereStart     = $this->faker->bothify('WhereStart#?#?');
        $this->randomLength         = rand(50,9999);
        $this->randomTime           = rand(0,23) .':' .rand(00,59);
        $this->randomPrice          = rand(30000,1000000);
        $this->randomLicensePlates  = $this->faker->bothify('##?-####');
        $this->randomSeats          = rand(16,60);
        $this->searchDayStart       = "2018-08-08";
        $this->searchDayStartEdit   = "2018-09-09";
        $this->searchTime           = "12:00";
        $this->searchTimeEdit       = "20:00";
    }
    /**
     * @param AdminLoginStep $I
     */
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }
    /**
     * @param AcceptanceTester $I
     * @param $scenario
     */
    public function testRoute(AcceptanceTester $I, $scenario)
    {
        $I = new RouteStep($scenario);
        $I->wantTo('Create new Route!');
        $I->addRoute( $this->randomCodeRoute, $this->randomWhereTo, $this->randomWhereStart, $this->randomLength, $this->randomTime, $this->randomPrice);
    }
    /**
     * @param AcceptanceTester $I
     * @param $scenario
     */
    public function testBus(AcceptanceTester $I, $scenario)
    {
        $I = new BusStep($scenario);
        $I->wantTo('Create new Bus!');
        $I->addBus($this->randomLicensePlates, $this->randomSeats);
    }
    /**
     * @param LoTrinhStep $I
     * @param $scenario
     * @throws Exception
     */
    public function createSchedule(ScheduleStep $I, $scenario)
    {
        $I = new ScheduleStep($scenario);
        $I->wantTo('Create new schedule!');
        $I->addSchedule($this->randomCodeRoute, $this->randomLicensePlates, $this->searchDayStart, $this->searchTime);
    }
    /**
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */
    public function editSchedule(AcceptanceTester $I, $scenario)
    {
        $I = new ScheduleStep($scenario);
        $I->wantTo('Edit this Schedule!');
        $I->editSchedule('CodeRoute918', $this->searchDayStartEdit, $this->searchTimeEdit);
    }
    /**
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */
    public function deleteSchedule(AcceptanceTester $I, $scenario)
    {
        $I = new ScheduleStep($scenario);
        $I->wantTo('Delete this Schedule!');
        $I->deleteSchedule($this->randomCodeRoute);
    }

}
