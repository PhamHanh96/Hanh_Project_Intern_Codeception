<?php
namespace Page\user;
/**
 * Class UserLoginPage
 * @package Page\user
 */
class UserLoginPage
{
    // include url of current page
    public static $URL = '/';

    public static $buttonLogIn = ['xpath' => '//a[contains(@href, \'/Login/Index\')]'];

    public static $buttonLogOut = ['xpath' => '//a[contains(@href, \'/Login/LogOut\')]' ];

    public static $email = ['id' => 'EMAIL_KH'];

    public static $password = ['id' => 'MATKHAU'];

    public static $buttonSubmitLogin = ['xpath' => '//button[contains(@class, \'pull-right\')]'];
}
