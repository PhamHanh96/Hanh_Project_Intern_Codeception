<?php
namespace Page\User;

class UserInformationPage
{
    // include url of current page
    public static $URL = '/';

    public static $buttonCustomer = ['xpath' => '//a[contains(@href, \'/KhachHang/Edit\')]'];

    public static $messageNotification = 'SỬA THÔNG TIN CÁ NHÂN';

    public static $username = ['id' => 'TEN_KH'];

    public static $phoneNumber = ['id' => 'SDT_KH'];

    public static $idCustomer = ['id' => 'CMND_KH'];

    public static $address = ['id' => 'DIACHI_KH'];

    public static $password = ['id' => 'MATKHAU'];

    public static $confirmPassword = ['id' => 'CONFIRM_PASS'];

    public static $buttonUpdate = ['xpath' => '//input[contains(@class, \'btn-primary\')]'];

    public static $messageSaveSuccess = 'CẬP NHẬT THÀNH CÔNG KHÁCH HÀNG';

    public static $buttonInformation = ['xpath' => '//a[contains(@href, \'/Home/ThongTinKhachHang\')]'];


}
