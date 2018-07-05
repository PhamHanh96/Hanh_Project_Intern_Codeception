<?php
namespace Page\admin;

class BusPage
{
    // include url of current page
    public static $URL = '/Admin/ADXeKhach';

    public static $buttonNew = ['xpath' => '//a[contains(@class, \'btn-primary\')]'];

    public static $licensePlates = ['id' => 'MA_BSX'];

    public static $seats = ['id' => 'SOCHO'];

    public static $buttonAddNew = ['xpath' => '//input[contains(@class, \'btn-default\')]'];

    public static $messageSaveSuccess = 'Thêm thành công xe khách';


}
