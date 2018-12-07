<?php
namespace Page\Admin;
/**
 * Class AdminLoginPage
 * @package Page\Admin
 */
class AdminLoginPage
{
    //Page
    public static $url = '';
    public static $username = '';
    public static $password = '';
    public static $name = '';
    public static $phone = '';
    public static $identifyCard = '';
    public static $address = '';
    public static $pass = '';
    public static $confirmPassword = '';
    public static $updateButton = '';
    public static $loginButton = '';
    public static $userIcon = '';
    public static $editInformation = '';
    public static $logoutButton = '';
    public static $messageLogin1 = '';
    public static $messageLogin2 = '';
    public static $messageLogin3 = '';
    public static $messageUpdate1 = '';
    public static $messageUpdate2 = '';
    public static $messageUpdate3 = '';
    public static $messageUpdate4 = '';

    //Cest
    public static $usernameTrue = '';
    public static $usernameFail = '';
    public static $passwordTrue = '';
    public static $passwordFail = '';
    public static $nameEdit = '';
    public static $phoneEdit = '';
    public static $identifyCardEdit = '';
    public static $addressEdit = '';
    public static $passEdit = '';
    public static $confirmPassEdit = '';
    public static $confirmPassFail = '';

    public static function setProperties()
    {
        $conn = new \mysqli('localhost', 'root', '', 'dat_ve');
        mysqli_set_charset($conn, 'UTF8');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql_page = "SELECT items from testscript";

        $sql_cest = "SELECT values_input from testscript";

        $result_page = $conn->query($sql_page);

        $result_cest = $conn->query($sql_cest);

        if ($result_page->num_rows > 0)
        {
            // output data of each row
            while($row = $result_page->fetch_assoc())
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
        self::$url = str_replace("'", "", trim(explode("=", $rows[0]['items'])[1]));
        eval("self::\$username = " . $rows[1]['items'] . ";");
        eval("self::\$password = " . $rows[2]['items'] . ";");
        eval("self::\$loginButton = " . $rows[3]['items'] . ";");
        eval("self::\$userIcon = " . $rows[29]['items'] . ";");
        eval("self::\$logoutButton = " . $rows[24]['items'] . ";");
        eval("self::\$messageLogin1 = " . $rows[9]['items'] . ";");
        eval("self::\$messageLogin2 = " . $rows[14]['items'] . ";");
        eval("self::\$messageLogin3 = " . $rows[18]['items'] . ";");
        eval("self::\$editInformation = " . $rows[38]['items'] . ";");
        eval("self::\$name = " . $rows[39]['items'] . ";");
        eval("self::\$phone = " . $rows[40]['items'] . ";");
        eval("self::\$identifyCard = " . $rows[41]['items'] . ";");
        eval("self::\$address = " . $rows[42]['items'] . ";");
        eval("self::\$pass = " . $rows[43]['items'] . ";");
        eval("self::\$confirmPassword = " . $rows[44]['items'] . ";");
        eval("self::\$updateButton = " . $rows[45]['items'] . ";");
        eval("self::\$messageUpdate1 = " . $rows[46]['items'] . ";");
        eval("self::\$messageUpdate2 = " . $rows[58]['items'] . ";");
        eval("self::\$messageUpdate3 = " . $rows[72]['items'] . ";");
        eval("self::\$messageUpdate4 = " . $rows[86]['items'] . ";");

        //Cest
        eval("self::\$usernameTrue = " . $rows_cest[1]['values_input'] . ";");
        eval("self::\$usernameFail = " . $rows_cest[11]['values_input'] . ";");
        eval("self::\$passwordTrue = " . $rows_cest[2]['values_input'] . ";");
        eval("self::\$passwordFail = " . $rows_cest[17]['values_input'] . ";");
        eval("self::\$nameEdit = " . $rows_cest[39]['values_input'] . ";");
        eval("self::\$phoneEdit = " . $rows_cest[40]['values_input'] . ";");
        eval("self::\$identifyCardEdit = " . $rows_cest[41]['values_input'] . ";");
        eval("self::\$addressEdit = " . $rows_cest[42]['values_input'] . ";");
        eval("self::\$passEdit = " . $rows_cest[43]['values_input'] . ";");
        eval("self::\$confirmPassEdit = " . $rows_cest[44]['values_input'] . ";");
        eval("self::\$confirmPassFail = " . $rows_cest[84]['values_input'] . ";");
    }
}
AdminLoginPage::setProperties();
var_dump('<br>');
var_dump(AdminLoginPage::$url);var_dump('<br>');
var_dump(AdminLoginPage::$username);var_dump('<br>');
var_dump(AdminLoginPage::$password);var_dump('<br>');
var_dump(AdminLoginPage::$loginButton);var_dump('<br>');
var_dump(AdminLoginPage::$userIcon);var_dump('<br>');
var_dump(AdminLoginPage::$logoutButton);var_dump('<br>');
var_dump(AdminLoginPage::$messageLogin1);var_dump('<br>');
var_dump(AdminLoginPage::$messageLogin2);var_dump('<br>');
var_dump(AdminLoginPage::$messageLogin3);var_dump('<br>');
var_dump(AdminLoginPage::$editInformation);var_dump('<br>');
var_dump(AdminLoginPage::$name);var_dump('<br>');
var_dump(AdminLoginPage::$phone);var_dump('<br>');
var_dump(AdminLoginPage::$identifyCard);var_dump('<br>');
var_dump(AdminLoginPage::$address);var_dump('<br>');
var_dump(AdminLoginPage::$pass);var_dump('<br>');
var_dump(AdminLoginPage::$confirmPassword);var_dump('<br>');
var_dump(AdminLoginPage::$updateButton);var_dump('<br>');
var_dump(AdminLoginPage::$messageUpdate1);var_dump('<br>');
var_dump(AdminLoginPage::$messageUpdate2);var_dump('<br>');
var_dump(AdminLoginPage::$messageUpdate3);var_dump('<br>');
var_dump(AdminLoginPage::$messageUpdate4);var_dump('<br>');
//Cest
var_dump(AdminLoginPage::$usernameTrue);var_dump('<br>');
var_dump(AdminLoginPage::$usernameFail);var_dump('<br>');
var_dump(AdminLoginPage::$passwordTrue);var_dump('<br>');
var_dump(AdminLoginPage::$passwordFail);var_dump('<br>');
var_dump(AdminLoginPage::$nameEdit);var_dump('<br>');
var_dump(AdminLoginPage::$phoneEdit);var_dump('<br>');
var_dump(AdminLoginPage::$identifyCardEdit);var_dump('<br>');
var_dump(AdminLoginPage::$addressEdit);var_dump('<br>');
var_dump(AdminLoginPage::$passEdit);var_dump('<br>');
var_dump(AdminLoginPage::$confirmPassEdit);var_dump('<br>');
var_dump(AdminLoginPage::$confirmPassFail);var_dump('<br>');




