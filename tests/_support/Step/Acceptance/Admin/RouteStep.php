<?php
namespace Step\Acceptance\Admin;
use \Step\Acceptance;
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
        //$I->amOnPage(RoutePage::$url);
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
        $I->pauseExecution();
        $I->click(RoutePage::$iconDelete);
        //$I->see(RoutePage::$messageDelete);

        $I->wantTo('Test with delete route but then cancel');
        $I->waitForElement(RoutePage::$buttonContinue,30);


        $I->wantTo('Test with delete route then accept');
       // $I->pauseExecution();
        $I->click(RoutePage::$buttonContinue);
        //$I->pauseExecution();
        $I->acceptPopup();
//        $I->click(RoutePage::$buttonContinue);
       // $I->waitForText(RoutePage::$messageDeleteSuccess, 60);
        $I->dontSee($codeRoute);


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