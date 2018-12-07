<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/5/2018
 * Time: 6:56 PM
 */

/*$test = "['id' => 'TENNV']";

eval("\$user = $test;");

print_r($user);*/ ?>

<?php
//namespace Page\Admin;

/**
 * Class AdminLoginPage
 * @package Page\Admin
 */
class AdminLoginPage
{
    public static $url = '';

    public static $username = '';

    public static $password = '';

    public static $name = ['id' => 'TENNV'];

    public static $phone = ['id' => 'SDT_NV'];

    public static $idAdmin = ['id' => 'CMND_NV'];

    public static $address = ['id' => 'DIACHI_NV'];

    public static $pass = ['id' => 'MATKHAU'];

    public static $confirmPass = ['id' => 'CONFIRM_PASS'];

    public static $buttonUpdate = ['xpath' => '//input[contains(@class, \'btn-default\')]'];

    public static $loginButton = ['xpath'=>'//button[contains(@class, \'btn-block btndn\')]'];

    public static $iconUser = ['xpath'=>'//i[contains(@class, \'fa-3x\')]'];

    public static $editInformation = ['xpath' => '//a[contains(@href, \'/Admin/ADNhanVien/XemThongTin\')]'];

    public static $buttonLogout = ['xpath' => '//a[contains(@href, \'/Admin/ADLogin/LogOut\')]'];

    public static $messageSuccess = 'Cập nhật thành công thông tin cá nhân';

    public static function setProperties()
    {
        $conn = new mysqli('localhost', 'root', '', 'dat_ve');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT items from testscript";

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                $rows[]=$row;
            }
        }
        else
        {
            echo "0 results";
        }

        $conn->close();

        self::$url = str_replace("'", "", trim(explode("=", $rows[0]['items'])[1]));
        eval("self::\$username = " . $rows[1]['items'] . ";");
        eval("self::\$password = " . $rows[2]['items'] . ";");
        eval("self::\$loginButton = " . $rows[3]['items'] . ";");

    }
}

AdminLoginPage::setProperties();
var_dump('<br>');
var_dump(AdminLoginPage::$url);
var_dump(AdminLoginPage::$username);
var_dump(AdminLoginPage::$password);
var_dump(AdminLoginPage::$loginButton);
