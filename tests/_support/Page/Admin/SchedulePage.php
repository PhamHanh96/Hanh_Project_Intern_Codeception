<?php
namespace Page\Admin;

class SchedulePage
{

    public static $url = '/Admin/ADLoTrinh';

    public static $buttonNew = ['xpath' => './/*[@id=\'page-wrapper\']/div/div/div[2]/div/div[1]/a'];

    public static $codeRoute = ['id' => 'MS_TUYEN'];

    public static $licensePlates = ['id' => 'BSXE'];

    public static $dayStart = ['id' => 'checkin'];

    public static $Time = ['id' => 'GIO'];

    public static $buttonAddNew = ['xpath' => './/*[@id=\'page-wrapper\']/div/div/form/div/div[5]/div/input'];

    public static $messageSaveSuccess = 'Thêm thành công lộ trình';

    public static function returnChoice($value)
    {
        return ['xpath' => "//option[contains(text(), '" . $value . "')]"];
    }

}
