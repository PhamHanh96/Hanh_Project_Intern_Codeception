<?php
namespace Page\user;

class UserLoginPage
{
    // include url of current page
    public static $URL = '/';

    public static $buttonLogIn = ['xpath' => './/*[@id=\'top-nav\']/div/ul/li[5]/a'];

    public static $email = ['id' => 'EMAIL_KH'];

    public static $password = ['id' => 'MATKHAU'];

    public static $buttonSubmitLogin = ['xpath' => './/*[@id=\'login-form-left\']/div/form/div/div[3]/button'];



}
