<?php
namespace Page\User;

class RegisterPage
{
    // include url of current page
    public static $URL = '/';

    public static $buttonRegister = ['xpath' => '//a[contains(@href, \'/KhachHang/Create\')]'];

    public static $username = ['id' => 'TEN_KH'];

    public static $email = ['id' => 'EMAIL_KH'];

    public static $phoneNumber = ['id' => 'SDT_KH'];

    public static $idCustomer = ['id' => 'CMND_KH'];

    public static $address = ['id' => 'DIACHI_KH'];

    public static $password = ['id' => 'MATKHAU'];

    public static $confirmPassword = ['id' => 'CONFIRM_PASS'];

    public static $buttonSubmitRegister = ['xpath' => '//input[contains(@class, \'btn-primary\')]'];

    public static $messageSaveSuccess = 'Đăng kí thành công';

}
