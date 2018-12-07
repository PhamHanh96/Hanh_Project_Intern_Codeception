<?php
namespace Page\User;
/**
 * Class UserInformationPage
 * @package Page\User
 */
class UserInformationPage
{
    //Page
    public static $urlHome = '/';
    public static $loginButton = '';
    public static $submitLoginButton = '';
    public static $customerButton = '';
    public static $updateButton = '';
    public static $usernameLogin = '';
    public static $passwordLogin = '';
    public static $username = '';
    public static $phoneNumber = '';
    public static $idCustomer = '';
    public static $address = '';
    public static $password = '';
    public static $confirmPassword = '';
    public static $messageUpdateSuccess = '';
    public static $messageUpdateMissingPassword = '';
    public static $messageUpdateConfirmPasswordWrong = '';

    //Cest
    public static $usernameTrue = '';
    public static $passwordTrue = '';
    public static $tenKHSua = '';
    public static $sdtKHSua = '';
    public static $cmndKHSua = '';
    public static $diaChiKHSua = '';
    public static $matKhauKH = '';
    public static $xacNhanMK = '';
    public static $xacNhanMKSai = '';

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
        self::$urlHome = str_replace("'", "", trim(explode("=", $rows[367]['items'])[1]));
        eval("self::\$loginButton = " . $rows[423]['items'] . ";");
        eval("self::\$submitLoginButton = " . $rows[426]['items'] . ";");
        eval("self::\$customerButton = " . $rows[427]['items'] . ";");
        eval("self::\$updateButton = " . $rows[437]['items'] . ";");
        eval("self::\$usernameLogin = " . $rows[424]['items'] . ";");
        eval("self::\$passwordLogin = " . $rows[425]['items'] . ";");
        eval("self::\$username = " . $rows[368]['items'] . ";");
        eval("self::\$phoneNumber = " . $rows[430]['items'] . ";");
        eval("self::\$idCustomer = " . $rows[431]['items'] . ";");
        eval("self::\$address = " . $rows[432]['items'] . ";");
        eval("self::\$password = " . $rows[434]['items'] . ";");
        eval("self::\$confirmPassword = " . $rows[436]['items'] . ";");
        eval("self::\$messageUpdateSuccess = " . $rows[429]['items'] . ";");
        eval("self::\$messageUpdateMissingPassword = " . $rows[438]['items'] . ";");
        eval("self::\$messageUpdateConfirmPasswordWrong = " . $rows[453]['items'] . ";");

        //Cest
        eval("self::\$usernameTrue = " . $rows_cest[401]['values_input'] . ";");
        eval("self::\$passwordTrue = " . $rows_cest[402]['values_input'] . ";");
        eval("self::\$tenKHSua = " . $rows_cest[428]['values_input'] . ";");
        eval("self::\$sdtKHSua = " . $rows_cest[430]['values_input'] . ";");
        eval("self::\$cmndKHSua = " . $rows_cest[431]['values_input'] . ";");
        eval("self::\$diaChiKHSua = " . $rows_cest[432]['values_input'] . ";");
        eval("self::\$matKhauKH = " . $rows_cest[434]['values_input'] . ";");
        eval("self::\$xacNhanMK = " . $rows_cest[436]['values_input'] . ";");
        eval("self::\$xacNhanMKSai = " . $rows_cest[452]['values_input'] . ";");

    }
}
UserInformationPage::setProperties();
var_dump('<br>');
var_dump(UserInformationPage::$urlHome);var_dump('<br>');
var_dump(UserInformationPage::$loginButton);var_dump('<br>');
var_dump(UserInformationPage::$submitLoginButton);var_dump('<br>');
var_dump(UserInformationPage::$customerButton);var_dump('<br>');
var_dump(UserInformationPage::$updateButton);var_dump('<br>');
var_dump(UserInformationPage::$usernameLogin);var_dump('<br>');
var_dump(UserInformationPage::$passwordLogin);var_dump('<br>');
var_dump(UserInformationPage::$username);var_dump('<br>');
var_dump(UserInformationPage::$phoneNumber);var_dump('<br>');
var_dump(UserInformationPage::$idCustomer);var_dump('<br>');
var_dump(UserInformationPage::$address);var_dump('<br>');
var_dump(UserInformationPage::$password);var_dump('<br>');
var_dump(UserInformationPage::$messageUpdateSuccess);var_dump('<br>');
var_dump(UserInformationPage::$messageUpdateMissingPassword);var_dump('<br>');
var_dump(UserInformationPage::$messageUpdateConfirmPasswordWrong);var_dump('<br>');

//Cest
var_dump(UserInformationPage::$usernameTrue);var_dump('<br>');
var_dump(UserInformationPage::$passwordTrue);var_dump('<br>');
var_dump(UserInformationPage::$tenKHSua);var_dump('<br>');
var_dump(UserInformationPage::$sdtKHSua);var_dump('<br>');
var_dump(UserInformationPage::$cmndKHSua);var_dump('<br>');
var_dump(UserInformationPage::$diaChiKHSua);var_dump('<br>');
var_dump(UserInformationPage::$matKhauKH);var_dump('<br>');
var_dump(UserInformationPage::$xacNhanMK);var_dump('<br>');
var_dump(UserInformationPage::$xacNhanMKSai);var_dump('<br>');


