<?php
namespace Page\Admin;

class SchedulePage
{

    public static $url = '/Admin/ADLoTrinh';

    public static $buttonNew = ['xpath' => '//a[contains(@class, \'btn-primary\')]'];

    public static $codeRoute = ['id' => 'MS_TUYEN'];

    public static $licensePlates = ['id' => 'BSXE'];

    public static $dayStart = ['id' => 'checkin'];

    public static $Time = ['id' => 'GIO'];

    public static $buttonAddNew = ['xpath' => '//input[contains(@class, \'btn-default\')]'];

    public static $buttonSearch = ['xpath' => '//input[contains(@class, \' input-sm\')]'];

    public static $iconEdit = ['class' => 'btn-default'];

    public static $iconDelete = ['xpath' => '//a[contains(@class, \' btn-danger\')]'];

    public static $buttonCancle = ['xpath' => '//button[contains(@class, \'btn-default\')]'];

    public static $buttonContinue = ['xpath' => '//button[contains(@class, \'btn-primary\')]'];

    public static $messageSaveSuccess = 'Thêm thành công lộ trình';

    public static $messageSaveSuccess1 = 'cập nhật thành công lộ trình';

    public static $messageDelete = 'Bạn có muốn xóa mục này không?';

    public static $messageDeleteSuccess = 'Xóa thành công!';

    public static function returnChoice($value)
    {
        return ['xpath' => "//option[contains(text(), '" . $value . "')]"];
    }

}
