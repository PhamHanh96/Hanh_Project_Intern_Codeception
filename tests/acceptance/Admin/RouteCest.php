<?php
use Step\Acceptance\Admin\RouteStep as RouteStep;
use Page\Admin\RoutePage as RoutePage;
class RouteCest
{
    /**
     * @param RouteStep $I
     * @throws Exception
     */
    public function themTuyenDuongDLDung(RouteStep $I)
    {
        $I->wantTo('Thêm tuyến đường với dữ liệu đúng');
        $I->addRouteWithDataTrue(RoutePage::$usernameTrue, RoutePage::$passwordTrue, RoutePage::$maTuyenDuong, RoutePage::$benDi, RoutePage::$benDen, RoutePage::$quangDuong, RoutePage::$thoiGian, RoutePage::$giaVe);
    }

    /**
     * @param RouteStep $I
     * @throws Exception
     */
    public function themTuyenDuongThieuMaTuyenDuong(RouteStep $I)
    {
        $I->wantTo('Thêm tuyến đường với bỏ trống mã tuyến đường');
        $I->addRouteWithMissingCodeRoute(RoutePage::$usernameTrue, RoutePage::$passwordTrue, '', RoutePage::$benDi, RoutePage::$benDen, RoutePage::$quangDuong, RoutePage::$thoiGian, RoutePage::$giaVe);
    }

    /**
     * @param RouteStep $I
     * @throws Exception
     */
    public function themTuyenDuongThieuQuangDuong(RouteStep $I)
    {
        $I->wantTo('Thêm tuyến đường với bỏ trống quãng đường');
        $I->addRouteWithMissingLength(RoutePage::$usernameTrue, RoutePage::$passwordTrue, RoutePage::$maTuyenDuong, RoutePage::$benDi, RoutePage::$benDen, '', RoutePage::$thoiGian, RoutePage::$giaVe);
    }

    /**
     * @param RouteStep $I
     * @throws Exception
     */
    public function timKiemTuyenDuongSai(RouteStep $I)
    {
        $I->wantTo('Tìm kiếm tuyến đường với dữ liệu sai');
        $I->searchFail(RoutePage::$usernameTrue, RoutePage::$passwordTrue, RoutePage::$maTuyenDuongSai);
    }

    /**
     * @param RouteStep $I
     * @throws Exception
     */
    public function timKiemTuyenDuongDung(RouteStep $I)
    {
        $I->wantTo('Tìm kiếm tuyến đường với dữ liệu sai');
        $I->searchTrue(RoutePage::$usernameTrue, RoutePage::$passwordTrue, RoutePage::$maTuyenDuong);
    }

    /**
     * @param RouteStep $I
     * @throws Exception
     */
    public function suaTuyenDuongDLDung(RouteStep $I)
    {
        $I->wantTo('Sửa tuyến đường với dữ liệu đúng');
        $I->editRouteWithDataTrue(RoutePage::$usernameTrue, RoutePage::$passwordTrue, RoutePage::$maTuyenDuong, RoutePage::$benDi, RoutePage::$benDen, RoutePage::$quangDuong, RoutePage::$thoiGian, RoutePage::$giaVe);
    }

    /**
     * @param RouteStep $I
     * @throws Exception
     */
    public function suaTuyenDuongThieuThoiGian(RouteStep $I)
    {
        $I->wantTo('Sửa tuyến đường với thiếu thời gian');
        $I->editRouteWithMissingTime(RoutePage::$usernameTrue, RoutePage::$passwordTrue, RoutePage::$maTuyenDuong, RoutePage::$benDi, RoutePage::$benDen, RoutePage::$quangDuong, '', RoutePage::$giaVe);
    }

    /**
     * @param RouteStep $I
     * @throws Exception
     */
    public function xoaTuyenDuongCancel(RouteStep $I)
    {
        $I->wantTo('Xóa tuyến đường với Cancel');
        $I->deleteCancel(RoutePage::$usernameTrue, RoutePage::$passwordTrue, RoutePage::$maTuyenDuong);
    }

    /**
     * @param RouteStep $I
     * @throws Exception
     */
    public function xoaTuyenDuongOK(RouteStep $I)
    {
        $I->wantTo('Xóa tuyến đường với OK');
        $I->deleteOK(RoutePage::$usernameTrue, RoutePage::$passwordTrue, RoutePage::$maTuyenDuong);
    }
}
