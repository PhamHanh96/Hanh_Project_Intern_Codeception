<?php
namespace Page\Admin;
/**
 * Class EmployeePage
 * @package Page\Admin
 */
class EmployeePage
{
    public static $URL = '/Admin/ADNhanVien';

    public static $buttonNew = ['xpath' => '//a[contains(@class, \'btn-primary\')]'];

    public static $email = ['id' => 'EMAIL_NV'];

    public static $username = ['id' => 'TENNV'];

    public static $position = ['id' => 'CHUCVU'];

    public static $phoneNumber = ['id' => 'SDT_NV'];

    public static $idEmployee = ['id' => 'CMND_NV'];

    public static $address = ['id' => 'DIACHI_NV'];

    public static $password = ['id' => 'MATKHAU'];

    public static $confirmPassword = ['id' => 'CONFIRM_PASS'];

    public static $buttonAddNew = ['xpath' => '//input[contains(@class, \'btn-default\')]'];

    public static $messageSaveSuccess = 'Thêm thành công nhân viên';

    public static $messageSaveSuccess1 = 'Cập nhật thành công Nhân Viên';

    public static $messageDelete = 'Bạn có muốn xóa mục này không?';

    public static $messageDeleteSuccess = 'Xóa thành công!';

    public static $buttonSearch = ['xpath' => '//input[contains(@class, \' input-sm\')]'];

    public static $iconEdit = ['xpath' => '//a[contains(@class, \'btn-default\')]'];

    public static $iconDelete = ['xpath' => '//a[contains(@class, \' btn-danger\')]'];

    public static $buttonCancle = ['xpath' => '//button[contains(@class, \'btn-default\')]'];

    public static $buttonContinue = ['xpath' => '//button[contains(@class, \'btn-primary\')]'];
    /**
     * @param $value
     * @return array
     */
    public static function returnChoice($value)
    {
        return ['xpath' => "//option[contains(text(), '" . $value . "')]"];
    }
}
