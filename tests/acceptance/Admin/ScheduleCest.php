<?php

use Step\Acceptance\Admin\ScheduleStep as ScheduleStep;
use Step\Acceptance\Admin\BusStep as BusStep;
use Step\Acceptance\Admin\RouteStep as RouteStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;

class ScheduleCest
{
    public function __construct()
    {
        $this->faker                 = Faker\Factory::create();
        $this->username             = 'nguyentrang0912@gmail.com';
        $this->password             = '123';
        $this->randomCodeRoute      = 'CodeRoute' .rand(1,999);
        $this->randomWhereTo        = 'WhereTo' .rand(1,999);
        $this->randomWhereStart     = 'WhereStart' .rand(1,999);
        $this->randomLength         = rand(50,9999);
        $this->randomTime           = rand(0,23) .':' .rand(00,59);
        $this->randomPrice          = rand(30000,1000000);
        $this->randomLicensePlates  = $this->faker->bothify('##?-####');
        $this->randomSeats          = rand(16,60);
        $this->searchDayStart       = $this->faker->date($format = 'Y-m-d', $min = 'now');
        $this->searchDayStartEdit   = $this->faker->date($format = 'Y-m-d', $min = 'now');;
        $this->searchTime           = '12:00';
        $this->searchTimeEdit       = '20:00';
    }
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }

    public function testRoute(AcceptanceTester $I, $scenario)
    {
        $I = new RouteStep($scenario);
        $I->wantTo('Create new Route!');
        $I->addRoute( $this->randomCodeRoute, $this->randomWhereTo, $this->randomWhereStart, $this->randomLength, $this->randomTime, $this->randomPrice);
    }

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

//    public function editSchedule(AcceptanceTester $I, $scenario)
//    {
//        $I = new ScheduleStep($scenario);
//        $I->wantTo('Edit this Schedule!');
//        $I->editSchedule($this->randomCodeRoute, $this->searchDayStartEdit, $this->searchTimeEdit);
//    }
//
//    public function deleteSchedule(AcceptanceTester $I, $scenario)
//    {
//        $I = new ScheduleStep($scenario);
//        $I->wantTo('Delete this Schedule!');
//        $I->deleteSchedule($this->randomCodeRoute);
//    }

}
