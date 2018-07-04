<?php
namespace Page\admin;

class BusPage
{
    // include url of current page
    public static $URL = '/Admin/ADXeKhach';

    public static $buttonNew = ['xpath' => './/*[@id=\'page-wrapper\']/div/div/div[2]/div/div/a'];

    public static $licensePlates = ['id' => 'MA_BSX'];

    public static $seats = ['id' => 'SOCHO'];

    public static $buttonAddNew = ['xpath' => './/*[@id=\'page-wrapper\']/div/div/form/div/div[3]/div/input'];

    public static $messageSaveSuccess = 'Thêm thành công xe khách';


}
