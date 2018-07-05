<?php
namespace Page\Admin;

class AdminLoginPage
{
    // include url of current page
    public static $url = '/Admin/ADLogin';

    //value of username
    public static $usernameValue = 'nguyentrang0912@gmail.com';
    //value of password
    public static $passwordValue = '123';

    //username for logging in
    public static $username = ['id' => 'Email'];

    //password field
    public static $password = ['id' => 'Password'];

    //login button
    public static $loginButton = ['xpath'=>'//button[contains(@class, \'btn-block btndn\')]'];


}
