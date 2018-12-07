<?php
namespace Page\user;
/**
 * Class UserLoginPage
 * @package Page\user
 */
class UserLoginPage
{
    //Page
    public static $urlHome = '/';
    public static $loginButton = '';
    public static $logoutButton = '';
    public static $submitLoginButton = '';
    public static $username = '';
    public static $password = '';
    public static $messagePasswordWrong = '';
    public static $messageUsernameWrong = '';

    //Cest
    public static $usernameTrue = '';
    public static $usernameFail = '';
    public static $passwordTrue = '';
    public static $passwordFail = '';

    public static function setProperties()
    {
        $conn = new \mysqli('localhost', 'root', '', 'dat_ve');
        mysqli_set_charset($conn, 'UTF8');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT items from testscript";
        $sql_cest = "SELECT values_input from testscript";

        $result = $conn->query($sql);
        $result_cest = $conn->query($sql_cest);

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
        if ($result_cest->num_rows > 0)
        {
            // output data of each row
            while($row = $result_cest->fetch_assoc())
            {
                $rows_cest[]=$row;
            }
        }
        else
        {
            echo "0 results";
        }

        $conn->close();

        //Page
        self::$urlHome = str_replace("'", "", trim(explode("=", $rows[399]['items'])[1]));
        eval("self::\$loginButton = " . $rows[400]['items'] . ";");
        eval("self::\$logoutButton = " . $rows[421]['items'] . ";");
        eval("self::\$submitLoginButton = " . $rows[403]['items'] . ";");
        eval("self::\$username = " . $rows[401]['items'] . ";");
        eval("self::\$password = " . $rows[402]['items'] . ";");
        eval("self::\$messagePasswordWrong = " . $rows[409]['items'] . ";");
        eval("self::\$messageUsernameWrong = " . $rows[415]['items'] . ";");

        //Cest
        eval("self::\$usernameTrue = " . $rows_cest[401]['values_input'] . ";");
        eval("self::\$usernameFail = " . $rows_cest[412]['values_input'] . ";");
        eval("self::\$passwordTrue = " . $rows_cest[402]['values_input'] . ";");
        eval("self::\$passwordFail = " . $rows_cest[407]['values_input'] . ";");
    }
}
UserLoginPage::setProperties();
var_dump('<br>');
var_dump(UserLoginPage::$urlHome);var_dump('<br>');
var_dump(UserLoginPage::$loginButton);var_dump('<br>');
var_dump(UserLoginPage::$logoutButton);var_dump('<br>');
var_dump(UserLoginPage::$submitLoginButton);var_dump('<br>');
var_dump(UserLoginPage::$username);var_dump('<br>');
var_dump(UserLoginPage::$password);var_dump('<br>');
var_dump(UserLoginPage::$messageUsernameWrong);var_dump('<br>');
var_dump(UserLoginPage::$messagePasswordWrong);var_dump('<br>');

//Cest
var_dump(UserLoginPage::$usernameTrue);var_dump('<br>');
var_dump(UserLoginPage::$usernameFail);var_dump('<br>');
var_dump(UserLoginPage::$passwordTrue);var_dump('<br>');
var_dump(UserLoginPage::$passwordFail);var_dump('<br>');
