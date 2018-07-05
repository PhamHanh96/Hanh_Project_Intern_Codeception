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

    public static $messageSaveSuccess = 'Thêm thành công lộ trình';

    public static function returnChoice($value)
    {
        return ['xpath' => "//option[contains(text(), '" . $value . "')]"];
    }

}
