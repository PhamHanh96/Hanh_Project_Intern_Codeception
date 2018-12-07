<?php
use Step\Acceptance\Admin\EmployeeStep as EmployeeStep;
use Page\Admin\EmployeePage as EmployeePage;
class EmployeeCest
{
    /**
     * @param EmployeeStep $I
     * @throws Exception
     */
    public function themNVDuLieuDung(EmployeeStep $I)
    {
        $I->wantTo('Thêm nhân viên với dữ liệu đúng.');
        $I->addEmployeeWithDataTrue(EmployeePage::$usernameTrue, EmployeePage::$passwordTrue, EmployeePage::$emailNV, EmployeePage::$tenNV, EmployeePage::$sdtNV, EmployeePage::$cmndNV, EmployeePage::$diaChiNV, EmployeePage::$matKhau, EmployeePage::$xacNhanMK);
    }

    /**
     * @param EmployeeStep $I
     * @throws Exception
     */
    public function themNVThieuEmail(EmployeeStep $I)
    {
        $I->wantTo('Thêm nhân viên với bỏ trống Email.');
        $I->addEmployeeWithMissingEmail(EmployeePage::$usernameTrue, EmployeePage::$passwordTrue, EmployeePage::$tenNV, EmployeePage::$sdtNV, EmployeePage::$cmndNV, EmployeePage::$diaChiNV, EmployeePage::$matKhau, EmployeePage::$xacNhanMK);

    }

    /**
     * @param EmployeeStep $I
     * @throws Exception
     */
    public function themNVEmailTrung(EmployeeStep $I)
    {
        $I->wantTo('Thêm nhân viên với Email bị trùng.');
        $I->addEmployeeWithDuplicateEmail(EmployeePage::$usernameTrue, EmployeePage::$passwordTrue, EmployeePage::$emailTrungNV, EmployeePage::$tenNV, EmployeePage::$sdtNV, EmployeePage::$cmndNV, EmployeePage::$diaChiNV, EmployeePage::$matKhau, EmployeePage::$xacNhanMK);
    }

    /**
     * @param EmployeeStep $I
     */
    public function timKiemNVFail(EmployeeStep $I)
    {
        $I->wantTo('Tìm kiếm nhân viên với dữ liệu sai');
        $I->searchFail(EmployeePage::$usernameTrue, EmployeePage::$passwordTrue, EmployeePage::$emailSai);
    }

    /**
     * @param EmployeeStep $I
     */
    public function timKiemNVTrue(EmployeeStep $I)
    {
        $I->wantTo('Tìm kiếm nhân viên với dữ liệu đúng');
        $I->searchTrue(EmployeePage::$usernameTrue, EmployeePage::$passwordTrue, EmployeePage::$emailNV);
    }

    /**
     * @param EmployeeStep $I
     * @throws Exception
     */
    public function suaNVDuLieuDung(EmployeeStep $I)
    {
        $I->wantTo('Sửa nhân viên với dữ liệu đúng.');
        $I->editEmployeeWithDataTrue(EmployeePage::$usernameTrue, EmployeePage::$passwordTrue, EmployeePage::$emailNV, EmployeePage::$tenNVSua, EmployeePage::$sdtNVSua, EmployeePage::$cmndNVSua, EmployeePage::$diaChiNVSua, EmployeePage::$matKhau, EmployeePage::$xacNhanMK);
    }

    /**
     * @param EmployeeStep $I
     * @throws Exception
     */
    public function suaNVThieuSdt(EmployeeStep $I)
    {
        $I->wantTo('Sửa nhân viên với thiếu số điện thoại.');
        $I->editEmployeeMisingPhone(EmployeePage::$usernameTrue, EmployeePage::$passwordTrue, EmployeePage::$emailNV, EmployeePage::$tenNVSua, '', EmployeePage::$cmndNVSua, EmployeePage::$diaChiNVSua, EmployeePage::$matKhau, EmployeePage::$xacNhanMK);
    }

    /**
     * @param EmployeeStep $I
     * @throws Exception
     */
    public function suaNVThieuCmnd(EmployeeStep $I)
    {
        $I->wantTo('Sửa nhân viên với thiếu chứng minh nhân dân.');
        $I->editEmployeeMissingIdentifyCard(EmployeePage::$usernameTrue, EmployeePage::$passwordTrue, EmployeePage::$emailNV, EmployeePage::$tenNVSua, EmployeePage::$sdtNVSua,'', EmployeePage::$diaChiNVSua, EmployeePage::$matKhau, EmployeePage::$xacNhanMK);
    }

    /**
     * @param EmployeeStep $I
     * @throws Exception
     */
    public function xoaCancel(EmployeeStep $I)
    {
        $I->wantTo('Xóa nhân viên với Cancel');
        $I->deleteCancel(EmployeePage::$usernameTrue, EmployeePage::$passwordTrue, EmployeePage::$emailNV);
    }

    /**
     * @param EmployeeStep $I
     * @throws Exception
     */
    public function xoaOK(EmployeeStep $I)
    {
        $I->wantTo('Xóa nhân viên với OK');
        $I->deleteOK(EmployeePage::$usernameTrue, EmployeePage::$passwordTrue, EmployeePage::$emailNV);
    }
}
