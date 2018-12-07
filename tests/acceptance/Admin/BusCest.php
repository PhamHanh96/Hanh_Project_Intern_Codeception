<?php
use Step\Acceptance\Admin\BusStep as BusStep;
use Page\admin\BusPage as BusPage;
class BusCest
{
    /**
     * @param BusStep $I
     */
    public function themXeKhachDuLieuDung(BusStep $I)
    {
        $I->wantTo('Thêm xe khách với dữ liệu đúng');
        $I->addBusWithDataTrue(BusPage::$usernameTrue, BusPage::$passwordTrue, BusPage::$bangSoXe, BusPage::$soCho);
    }

    /**
     * @param BusStep $I
     */
    public function themXeKhachBoTrongDuLieu(BusStep $I)
    {
        $I->wantTo('Thêm xe khách với bỏ trống dữ liệu');
        $I->addBusWithMissingData(BusPage::$usernameTrue, BusPage::$passwordTrue);
    }

    /**
     * @param BusStep $I
     */
    public function themXeKhachDuLieuTrung(BusStep $I)
    {
        $I->wantTo('Thêm xe khách với bảng số xe bị trùng');
        $I->addBusWithDataDuplicate(BusPage::$usernameTrue, BusPage::$passwordTrue, BusPage::$bangSoXe, BusPage::$soCho);
    }

    /**
     * @param BusStep $I
     */
    public function themXeKhachBoTrongBangSoXe(BusStep $I)
    {
        $I->wantTo('Thêm xe khách với dữ bỏ trống bảng số xe');
        $I->addBusWithMissingLicensePlates(BusPage::$usernameTrue, BusPage::$passwordTrue, BusPage::$soCho);
    }
    /**
     * @param BusStep $I
     */
    public function timKiemXeFail(BusStep $I)
    {
        $I->wantTo('Tìm kiếm xe khách với dữ liệu sai');
        $I->searchFail(BusPage::$usernameTrue, BusPage::$passwordTrue, BusPage::$bangSoXeSai);
    }

    /**
     * @param BusStep $I
     */
    public function timKiemXeTrue(BusStep $I)
    {
        $I->wantTo('Tìm kiếm xe khách với dữ liệu đúng');
        $I->searchTrue(BusPage::$usernameTrue, BusPage::$passwordTrue, BusPage::$bangSoXe);
    }

    /**
     * @param BusStep $I
     * @throws Exception
     */
    public function suaXeKhachVoiDuLieuDung(BusStep $I)
    {
        $I->wantTo('Sửa dữ liệu xe khách với dữ liệu đúng');
        $I->editBusVerifyData(BusPage::$usernameTrue, BusPage::$passwordTrue, BusPage::$bangSoXe, BusPage::$bangSoXeSua, BusPage::$soChoSua);
    }

    /**
     * @param BusStep $I
     * @throws Exception
     */
    public function xoaXeKhachCancel(BusStep $I)
    {
        $I->wantTo('Xóa xe khách với Cancel');
        $I->deleteCancel(BusPage::$usernameTrue, BusPage::$passwordTrue, BusPage::$bangSoXe);
    }

    /**
     * @param BusStep $I
     * @throws Exception
     */
    public function xoaXeKhachOK(BusStep $I)
    {
        $I->wantTo('Xóa xe khách với OK');
        $I->deleteOK(BusPage::$usernameTrue, BusPage::$passwordTrue, BusPage::$bangSoXe);
    }
}
