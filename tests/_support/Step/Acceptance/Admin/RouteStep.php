<?php
namespace Step\Acceptance\Admin;
use Page\Admin\RoutePage as RoutePage;

class RouteStep extends \AcceptanceTester
{

    public function addRoute($codeRoute, $whereStart, $whereTo, $length, $time, $price)
    {
        $I = $this;
        $I->wantTo('Tao tuyen duong moi!');
        $I->amOnPage(RoutePage::$url);
        $I->click(RoutePage::$buttonNew);
        $I->fillField(RoutePage::$codeRoute, $codeRoute);
        $I->fillField(RoutePage::$whereTo, $whereTo);
        $I->fillField(RoutePage::$whereStart, $whereStart);
        $I->fillField(RoutePage::$length, $length);
        $I->fillField(RoutePage::$time, $time);
        $I->fillField(RoutePage::$price, $price);
        $I->click(RoutePage::$buttonAddNew);
        $I->see(RoutePage::$messageSaveSuccess);
    }
}