<?php

use Step\Acceptance\Admin\RouteStep as RouteStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;

class RouteCest
{
    /**
     * TuyenDuongCest constructor.
     */
    public function __construct()
    {
       $this->faker               = Faker\Factory::create();
       $this->username           = 'nguyentrang0912@gmail.com';
       $this->password           = '123';
       $this->randomCodeRoute    = 'CodeRoute' .rand(1,999);
       $this->randomWhereTo      = 'WhereTo' .rand(1,999);
       $this->randomWhereStart   = 'WhereStart' .rand(1,999);
       $this->randomLength       = rand(50,9999);
       $this->randomTime         = $this->faker->time($format = 'H:i:s', $max = 'now');
       $this->randomPrice        = rand(30000,1000000);
    }
    /**
     * @param AdminLoginStep $I
     */
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }
    /**
     * @param RouteStep $I
     */
    public function createRoute(routeStep $I)
    {
        $I->addRoute( $this->randomCodeRoute, $this->randomWhereTo, $this->randomWhereStart, $this->randomLength, $this->randomTime, $this->randomPrice);
    }
    /**
     * @param RouteStep $I
     */
    public function editRoute(routeStep $I)
    {
        $I->editRoute( $this->randomCodeRoute,$this->randomWhereTo, $this->randomWhereStart, $this->randomLength,$this->randomTime, $this->randomPrice);
    }
    /**
     * @param RouteStep $I
     */
    public function deleteRoute(routeStep $I)
    {
        $I->wantTo('Delete this Route!');
        $I->deleteRoute($this->randomCodeRoute);
    }
}
