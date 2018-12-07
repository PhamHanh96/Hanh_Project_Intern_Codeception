<?php
namespace Page\Admin;
/**
 * Class BillPage
 * @package Page\Admin
 */
class BillPage
{
    //Page
    public static $urlAdmin = '';
    public static $urlBill = '';
    public static $username = '';
    public static $password = '';
    public static $loginButton = '';
    public static $searchButton = '';
    public static $editIcon = '';
    public static $cancelButton = '';
    public static $continueButton = '';
    public static $messageSearch = '';
    public static $messageSuccess = '';

    //Cest
    public static $usernameTrue = '';
    public static $passwordTrue = '';
    public static $codeBill = '';
    public static $codeBillWrong = '';

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
        self::$urlAdmin = str_replace("'", "", trim(explode("=", $rows[0]['items'])[1]));
        self::$urlBill = str_replace("'", "", trim(explode("=", $rows[91]['items'])[1]));
        eval("self::\$username = " . $rows[1]['items'] . ";");
        eval("self::\$password = " . $rows[2]['items'] . ";");
        eval("self::\$loginButton = " . $rows[3]['items'] . ";");
        eval("self::\$searchButton = " . $rows[98]['items'] . ";");
        eval("self::\$editIcon = " . $rows[106]['items'] . ";");
        eval("self::\$continueButton = " . $rows[115]['items'] . ";");
        eval("self::\$cancelButton = " . $rows[107]['items'] . ";");
        eval("self::\$messageSearch = " . $rows[99]['items'] . ";");
        eval("self::\$messageSuccess = " . $rows[116]['items'] . ";");

        //Cest
        eval("self::\$usernameTrue = " . $rows_cest[94]['values_input'] . ";");
        eval("self::\$passwordTrue = " . $rows_cest[95]['values_input'] . ";");
        eval("self::\$codeBillWrong = " . $rows_cest[98]['values_input'] . ";");
        eval("self::\$codeBill = " . $rows_cest[105]['values_input'] . ";");
    }
}
BillPage::setProperties();
var_dump('<br>');
var_dump(BillPage::$urlAdmin);var_dump('<br>');
var_dump(BillPage::$urlBill);var_dump('<br>');
var_dump(BillPage::$username);var_dump('<br>');
var_dump(BillPage::$password);var_dump('<br>');
var_dump(BillPage::$loginButton);var_dump('<br>');
var_dump(BillPage::$searchButton);var_dump('<br>');
var_dump(BillPage::$editIcon);var_dump('<br>');
var_dump(BillPage::$continueButton);var_dump('<br>');
var_dump(BillPage::$cancelButton);var_dump('<br>');
var_dump(BillPage::$messageSearch);var_dump('<br>');
var_dump(BillPage::$messageSuccess);var_dump('<br>');

//Cest
var_dump(BillPage::$usernameTrue);var_dump('<br>');
var_dump(BillPage::$passwordTrue);var_dump('<br>');
var_dump(BillPage::$codeBill);var_dump('<br>');
var_dump(BillPage::$codeBillWrong);var_dump('<br>');
