<?php
namespace Page\User;
/**
 * Class RegisterPage
 * @package Page\User
 */
class RegisterPage
{
    //Page
    public static $urlHome = '/';
    public static $registerButton = '';
    public static $submitRegisterButton = '';
    public static $username = '';
    public static $email = '';
    public static $phoneNumber = '';
    public static $idCustomer = '';
    public static $address = '';
    public static $password = '';
    public static $confirmPassword = '';
    public static $messageSaveSuccess = '';
    public static $messageMissingEmail = '';
    public static $messageConfirmPasswordWrong = '';

    //Cest
    public static $tenKH = '';
    public static $emailKH = '';
    public static $sdtKH = '';
    public static $cmndKH = '';
    public static $diaChiKH = '';
    public static $matKhauKH = '';
    public static $xacNhanMKKH = '';
    public static $xacNhanMKKHSai = '';

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
        eval("self::\$registerButton = " . $rows[368]['items'] . ";");
        eval("self::\$submitRegisterButton = " . $rows[376]['items'] . ";");
        eval("self::\$username = " . $rows[369]['items'] . ";");
        eval("self::\$email = " . $rows[370]['items'] . ";");
        eval("self::\$phoneNumber = " . $rows[371]['items'] . ";");
        eval("self::\$idCustomer = " . $rows[372]['items'] . ";");
        eval("self::\$address = " . $rows[373]['items'] . ";");
        eval("self::\$password = " . $rows[374]['items'] . ";");
        eval("self::\$confirmPassword = " . $rows[375]['items'] . ";");
        eval("self::\$messageSaveSuccess = " . $rows[377]['items'] . ";");
        eval("self::\$messageMissingEmail = " . $rows[387]['items'] . ";");
        eval("self::\$messageConfirmPasswordWrong = " . $rows[398]['items'] . ";");

        //Cest
        eval("self::\$tenKH = " . $rows_cest[369]['values_input'] . ";");
        eval("self::\$emailKH = " . $rows_cest[370]['values_input'] . ";");
        eval("self::\$sdtKH = " . $rows_cest[371]['values_input'] . ";");
        eval("self::\$cmndKH = " . $rows_cest[372]['values_input'] . ";");
        eval("self::\$diaChiKH = " . $rows_cest[373]['values_input'] . ";");
        eval("self::\$matKhauKH = " . $rows_cest[374]['values_input'] . ";");
        eval("self::\$xacNhanMKKH = " . $rows_cest[375]['values_input'] . ";");
        eval("self::\$xacNhanMKKHSai = " . $rows_cest[396]['values_input'] . ";");


    }
}
RegisterPage::setProperties();
var_dump('<br>');
var_dump(RegisterPage::$urlHome);var_dump('<br>');
var_dump(RegisterPage::$registerButton);var_dump('<br>');
var_dump(RegisterPage::$submitRegisterButton);var_dump('<br>');
var_dump(RegisterPage::$username);var_dump('<br>');
var_dump(RegisterPage::$email);var_dump('<br>');
var_dump(RegisterPage::$phoneNumber);var_dump('<br>');
var_dump(RegisterPage::$idCustomer);var_dump('<br>');
var_dump(RegisterPage::$password);var_dump('<br>');
var_dump(RegisterPage::$confirmPassword);var_dump('<br>');
var_dump(RegisterPage::$messageSaveSuccess);var_dump('<br>');
var_dump(RegisterPage::$messageMissingEmail);var_dump('<br>');
var_dump(RegisterPage::$messageConfirmPasswordWrong);var_dump('<br>');

//Cest
var_dump(RegisterPage::$tenKH);var_dump('<br>');
var_dump(RegisterPage::$emailKH);var_dump('<br>');
var_dump(RegisterPage::$sdtKH);var_dump('<br>');
var_dump(RegisterPage::$cmndKH);var_dump('<br>');
var_dump(RegisterPage::$diaChiKH);var_dump('<br>');
var_dump(RegisterPage::$matKhauKH);var_dump('<br>');
var_dump(RegisterPage::$xacNhanMKKH);var_dump('<br>');
var_dump(RegisterPage::$xacNhanMKKHSai);var_dump('<br>');