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
       $this->fake               = Faker\Factory::create();
       $this->username           = \Page\Admin\AdminLoginPage::$usernameValue;
       $this->password           = \Page\Admin\AdminLoginPage::$passwordValue;
       $this->randomCodeRoute    = 'CodeRoute' .rand(1,999);
       $this->randomWhereTo      = 'WhereTo' .rand(1,999);
       $this->randomWhereStart   = 'WhereStart' .rand(1,999);
       $this->randomLength       = rand(50,9999);
       $this->randomTime         = rand(0,23) .':' .rand(00,59);
       $this->randomPrice        = rand(30000,1000000);
    }


    /**
     * @param AdminLoginStep $I
     */
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }

    // tests
    public function createRoute(routeStep $I)
    {
        $I->addRoute( $this->randomCodeRoute, $this->randomWhereTo, $this->randomWhereStart, $this->randomLength, $this->randomTime, $this->randomPrice);
    }

    public function editRoute(routeStep $I)
    {
        $I->editRoute( $this->randomCodeRoute,$this->randomWhereTo, $this->randomWhereStart, $this->randomLength,$this->randomTime, $this->randomPrice);
    }

    public function deleteRoute(routeStep $I)
{
    $I->wantTo('Delete this Route!');
    $I->deleteRoute($this->randomCodeRoute);
}

//    public function viewRoute(routeStep $I)
//    {
//        $I->viewRoute('CodeRoute288');
//    }
}
