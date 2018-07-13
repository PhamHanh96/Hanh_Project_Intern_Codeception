<?php
namespace Page\Admin;
/**
 * Class AdminLoginPage
 * @package Page\Admin
 */
class AdminLoginPage
{
    // include url of current page
    public static $url = '/Admin/ADLogin';
    //username for logging in
    public static $username = ['id' => 'Email'];
    //password field
    public static $password = ['id' => 'Password'];

    public static $name = ['id' => 'TENNV'];

    public static $phone = ['id' => 'SDT_NV'];

    public static $idAdmin = ['id' => 'CMND_NV'];

    public static $address = ['id' => 'DIACHI_NV'];

    public static $pass = ['id' => 'MATKHAU'];

    public static $confirmPass = ['id' => 'CONFIRM_PASS'];

    public static $buttonUpdate = ['xpath' => '//input[contains(@class, \'btn-default\')]'];
    //login button
    public static $loginButton = ['xpath'=>'//button[contains(@class, \'btn-block btndn\')]'];

    public static $iconUser = ['xpath'=>'//i[contains(@class, \'fa-3x\')]'];

    public static $editInformation = ['xpath' => '//a[contains(@href, \'/Admin/ADNhanVien/XemThongTin\')]'];

    public static $buttonLogout = ['xpath' => '//a[contains(@href, \'/Admin/ADLogin/LogOut\')]'];

    public static $messageSuccess = 'Cập nhật thành công thông tin cá nhân';
}
