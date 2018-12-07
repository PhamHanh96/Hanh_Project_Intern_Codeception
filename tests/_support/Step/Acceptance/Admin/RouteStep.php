<?php
namespace Step\Acceptance\Admin;
use Page\Admin\RoutePage as RoutePage;

class RouteStep extends \AcceptanceTester
{
    /**
     * @param $user
     * @param $pass
     * @param $maTuyenDuong
     * @param $benDi
     * @param $benDen
     * @param $quangDuong
     * @param $thoiGian
     * @param $giaVe
     * @throws \Exception
     */
   public function addRouteWithDataTrue($user, $pass, $maTuyenDuong, $benDi, $benDen, $quangDuong, $thoiGian, $giaVe)
   {
       $I = $this;
       $I->amOnPage(RoutePage::$urlAdmin);
       $I->fillField(RoutePage::$username, $user);
       $I->fillField(RoutePage::$password, $pass);
       $I->click(RoutePage::$loginButton);
       $I->amOnPage(RoutePage::$urlRoute);
       $I->click(RoutePage::$newButton);
       $I->fillField(RoutePage::$codeRoute, $maTuyenDuong);
       $I->fillField(RoutePage::$whereStart, $benDi);
       $I->fillField(RoutePage::$whereTo, $benDen);
       $I->fillField(RoutePage::$length, $quangDuong);
       $I->fillField(RoutePage::$time, $thoiGian);
       $I->fillField(RoutePage::$prices, $giaVe);
       $I->waitForElement(RoutePage::$addButton);
       $I->click(RoutePage::$addButton);
       $I->wait(1);
       $I->see(RoutePage::$messageAddSuccess);
   }

    /**
     * @param $user
     * @param $pass
     * @param $benDi
     * @param $benDen
     * @param $quangDuong
     * @param $thoiGian
     * @param $giaVe
     * @throws \Exception
     */
    public function addRouteWithMissingCodeRoute($user, $pass, $maTuyenDuong, $benDi, $benDen, $quangDuong, $thoiGian, $giaVe)
    {
        $I = $this;
        $I->amOnPage(RoutePage::$urlAdmin);
        $I->fillField(RoutePage::$username, $user);
        $I->fillField(RoutePage::$password, $pass);
        $I->click(RoutePage::$loginButton);
        $I->amOnPage(RoutePage::$urlRoute);
        $I->click(RoutePage::$newButton);
        $I->fillField(RoutePage::$codeRoute, $maTuyenDuong);
        $I->fillField(RoutePage::$whereStart, $benDi);
        $I->fillField(RoutePage::$whereTo, $benDen);
        $I->fillField(RoutePage::$length, $quangDuong);
        $I->fillField(RoutePage::$time, $thoiGian);
        $I->fillField(RoutePage::$prices, $giaVe);
        $I->waitForElement(RoutePage::$addButton);
        $I->click(RoutePage::$addButton);
        $I->wait(1);
        $I->see(RoutePage::$messageMissingCodeRoute);
    }

    /**
     * @param $user
     * @param $pass
     * @param $maTuyenDuong
     * @param $benDi
     * @param $benDen
     * @param $thoiGian
     * @param $giaVe
     * @throws \Exception
     */
    public function addRouteWithMissingLength($user, $pass, $maTuyenDuong, $benDi, $benDen, $quangDuong, $thoiGian, $giaVe)
    {
        $I = $this;
        $I->amOnPage(RoutePage::$urlAdmin);
        $I->fillField(RoutePage::$username, $user);
        $I->fillField(RoutePage::$password, $pass);
        $I->click(RoutePage::$loginButton);
        $I->amOnPage(RoutePage::$urlRoute);
        $I->click(RoutePage::$newButton);
        $I->fillField(RoutePage::$codeRoute, $maTuyenDuong);
        $I->fillField(RoutePage::$whereStart, $benDi);
        $I->fillField(RoutePage::$whereTo, $benDen);
        $I->fillField(RoutePage::$length, $quangDuong);
        $I->fillField(RoutePage::$time, $thoiGian);
        $I->fillField(RoutePage::$prices, $giaVe);
        $I->waitForElement(RoutePage::$addButton);
        $I->click(RoutePage::$addButton);
        $I->wait(1);
        $I->see(RoutePage::$messageMissingLength);
    }

    /**
     * @param $user
     * @param $pass
     * @param $maTuyenDuong
     */
    public function searchFail($user, $pass, $maTuyenDuong)
    {
        $I = $this;
        $I->amOnPage(RoutePage::$urlAdmin);
        $I->fillField(RoutePage::$username, $user);
        $I->fillField(RoutePage::$password, $pass);
        $I->click(RoutePage::$loginButton);
        $I->amOnPage(RoutePage::$urlRoute);
        $I->fillField(RoutePage::$searchButton, $maTuyenDuong);
        $I->wait(1);
        $I->see(RoutePage::$messageSearch);
    }

    /**
     * @param $user
     * @param $pass
     * @param $maTuyenDuong
     */
    public function searchTrue($user, $pass, $maTuyenDuong)
    {
        $I = $this;
        $I->amOnPage(RoutePage::$urlAdmin);
        $I->fillField(RoutePage::$username, $user);
        $I->fillField(RoutePage::$password, $pass);
        $I->click(RoutePage::$loginButton);
        $I->amOnPage(RoutePage::$urlRoute);
        $I->fillField(RoutePage::$searchButton, $maTuyenDuong);
        $I->wait(1);
    }

    /**
     * @param $user
     * @param $pass
     * @param $maTuyenDuong
     * @param $benDi
     * @param $benDen
     * @param $quangDuong
     * @param $thoiGian
     * @param $giaVe
     * @throws \Exception
     */
    public function editRouteWithDataTrue($user, $pass, $maTuyenDuong, $benDi, $benDen, $quangDuong, $thoiGian, $giaVe)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $maTuyenDuong);
        $I->wait(1);
        $I->click(RoutePage::$editIcon);
        $I->wait(1);
        $I->fillField(RoutePage::$codeRoute, $maTuyenDuong);
        $I->fillField(RoutePage::$whereStart, $benDi);
        $I->fillField(RoutePage::$whereTo, $benDen);
        $I->fillField(RoutePage::$length, $quangDuong);
        $I->fillField(RoutePage::$time, $thoiGian);
        $I->fillField(RoutePage::$prices, $giaVe);
        $I->waitForElement(RoutePage::$addButton);
        $I->click(RoutePage::$updateButton);
        $I->wait(1);
        $I->see(RoutePage::$messageUpdateSuccess);
    }

    /**
     * @param $user
     * @param $pass
     * @param $maTuyenDuong
     * @param $benDi
     * @param $benDen
     * @param $quangDuong
     * @param $thoiGian
     * @param $giaVe
     * @throws \Exception
     */
    public function editRouteWithMissingTime($user, $pass, $maTuyenDuong, $benDi, $benDen, $quangDuong, $thoiGian, $giaVe)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $maTuyenDuong);
        $I->wait(1);
        $I->click(RoutePage::$editIcon);
        $I->wait(1);
        $I->fillField(RoutePage::$codeRoute, $maTuyenDuong);
        $I->fillField(RoutePage::$whereStart, $benDi);
        $I->fillField(RoutePage::$whereTo, $benDen);
        $I->fillField(RoutePage::$length, $quangDuong);
        $I->fillField(RoutePage::$time, $thoiGian);
        $I->fillField(RoutePage::$prices, $giaVe);
        $I->waitForElement(RoutePage::$addButton);
        $I->click(RoutePage::$updateButton);
        $I->wait(1);
        $I->see(RoutePage::$messageUpdateMissingTime);
    }

    /**
     * @param $user
     * @param $pass
     * @param $maTuyenDuong
     * @throws \Exception
     */
    public function deleteCancel($user, $pass, $maTuyenDuong)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $maTuyenDuong);
        $I->waitForElement(RoutePage::$deleteIcon, 30);
        $I->click(RoutePage::$deleteIcon);
        $I->wait(1);
        $I->click(RoutePage::$cancelButton);
        $I->see('Tuyến Đường');
    }

    /**
     * @param $user
     * @param $pass
     * @param $maTuyenDuong
     * @throws \Exception
     */
    public function deleteOK($user, $pass, $maTuyenDuong)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $maTuyenDuong);
        $I->waitForElement(RoutePage::$deleteIcon, 30);
        $I->click(RoutePage::$deleteIcon);
        $I->wait(1);
        $I->click(RoutePage::$continueButton);
        $I->wait(1);
    }
}