<?php
namespace Page\User;

class UserInformationPage
{
    // include url of current page
    public static $URL = '/';

    public static $buttonCustomer = ['xpath' => './/*[@id=\'top-nav\']/div/ul/li[5]'];

    public static $messageNotification = 'SỬA THÔNG TIN CÁ NHÂN';

    public static $username = ['id' => 'TEN_KH'];

    public static $phoneNumber = ['id' => 'SDT_KH'];

    public static $idCustomer = ['id' => 'CMND_KH'];

    public static $address = ['id' => 'DIACHI_KH'];

    public static $password = ['id' => 'MATKHAU'];

    public static $confirmPassword = ['id' => 'CONFIRM_PASS'];

    public static $buttonUpdate = ['xpath' => './/*[@id=\'body-top\']/div/div/div[2]/div[1]/div/form/div/div[8]/div/input'];

    public static $messageSaveSuccess = 'CẬP NHẬT THÀNH CÔNG KHÁCH HÀNG';

    public static $buttonInformation = ['xpath' => './/*[@id=\'br-cover-content\']/div[2]/nav/div/ul/li[3]/a'];


}
