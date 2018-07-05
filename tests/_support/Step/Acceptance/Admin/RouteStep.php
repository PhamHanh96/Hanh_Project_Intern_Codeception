<?php
namespace Step\Acceptance\Admin;
use Page\Admin\RoutePage as RoutePage;

class RouteStep extends \AcceptanceTester
{

    public function addRoute($codeRoute, $whereStart, $whereTo, $length, $time, $price)
    {
        $I = $this;
        $I->wantTo('Create new route!');
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
        $I->pauseExecution();
    }

    public function searchRoute($codeRoute)
    {
        $I = $this;
        $I->wantTo('Search Route!');
        $I->amOnPage(RoutePage::$url);
        $I->fillField(RoutePage::$buttonSearch, $codeRoute);
    }

    public function editRoute($codeRoute, $whereStart, $whereTo, $length, $time, $price )
    {
        $I = $this;
        $I->wantTo('Search Route!');
        $I->amOnPage(RoutePage::$url);
        $I->searchRoute($codeRoute);
        //$I->pauseExecution();
        $I->click(RoutePage::$iconEdit);
        $I->fillField(RoutePage::$whereTo, $whereTo);
        $I->fillField(RoutePage::$whereStart, $whereStart);
        $I->fillField(RoutePage::$length, $length);
        $I->fillField(RoutePage::$time, $time);
        $I->fillField(RoutePage::$price, $price);
        $I->click(RoutePage::$buttonAddNew);
        $I->see(RoutePage::$messageSaveSuccess1);
        $I->pauseExecution();

    }

    public function deleteRoute($codeRoute)
    {
        $I = $this;
        $I->wantTo('Delete Route!');
        $I->amOnPage(RoutePage::$url);
        $I->searchRoute($codeRoute);
        $I->click(RoutePage::$iconDelete);

//        $I->click(RoutePage::$iconDelete);
//        $I->wantTo('Test with delete Route but then cancel');
//        $I->click(RoutePage::$buttonCancle);
//        $I->pauseExecution();
//
//        $I->click(RoutePage::$iconDelete);
//        $I->wantTo('Test with delete Route then accept');
        $I->click(RoutePage::$buttonContinue);
        //$I->wait('1');
        $I->pauseExecution();


    }

//    public function viewRoute($codeRoute)
//    {
//        $I = $this;
//        $I->wantTo('View Route!');
//        $I->amOnPage(RoutePage::$url);
//        $I->searchRoute($codeRoute);
//       // $I->pauseExecution();
//        $I->click(RoutePage::$iconView);
//        //$I->see('Chi tiết ' .$codeRoute);
//        $I->pauseExecution();
//
//    }

}