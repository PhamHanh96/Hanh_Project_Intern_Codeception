<?php
namespace Page\admin;
/**
 * Class BusPage
 * @package Page\admin
 */
class BusPage
{
    //Page
    public static $urlAdmin = '';
    public static $urlBus = '';
    public static $username = '';
    public static $password = '';
    public static $loginButton = '';
    public static $newButton = '';
    public static $addButton = '';
    public static $editIcon = '';
    public static $deleteIcon = '';
    public static $updateButton = '';
    public static $searchButton = '';
    public static $cancelButton = '';
    public static $continueButton = '';
    public static $licensePlates = '';
    public static $seats = '';
    public static $messageAddSuccess = '';
    public static $messageMissingData = '';
    public static $messageMissingLicensePlates = '';
    public static $messageDuplicateLicensePlates = '';
    public static $messageUpdateSuccess = '';
    public static $messageSearch = '';
    public static $messageDelete = '';
    public static $messageDeleteSuccess = '';

    //Cest
    public static $usernameTrue = '';
    public static $passwordTrue = '';
    public static $bangSoXe = '';
    public static $soCho = '';
    public static $soChoSua = '';
    public static $bangSoXeSai = '';
    public static $bangSoXeSua = '';


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
        self::$urlBus = str_replace("'", "", trim(explode("=", $rows[530]['items'])[1]));
        eval("self::\$username = " . $rows[1]['items'] . ";");
        eval("self::\$password = " . $rows[2]['items'] . ";");
        eval("self::\$loginButton = " . $rows[3]['items'] . ";");
        eval("self::\$newButton = " . $rows[531]['items'] . ";");
        eval("self::\$addButton = " . $rows[534]['items'] . ";");
        eval("self::\$searchButton = " . $rows[568]['items'] . ";");
        eval("self::\$editIcon = " . $rows[180]['items'] . ";");
        eval("self::\$deleteIcon = " . $rows[592]['items'] . ";");
        eval("self::\$updateButton = " . $rows[584]['items'] . ";");
        eval("self::\$cancelButton  = " . $rows[594]['items'] . ";");
        eval("self::\$continueButton = " . $rows[603]['items'] . ";");
        eval("self::\$licensePlates = " . $rows[532]['items'] . ";");
        eval("self::\$seats = " . $rows[533]['items'] . ";");
        eval("self::\$messageAddSuccess = " . $rows[535]['items'] . ";");
        eval("self::\$messageMissingData = " . $rows[543]['items'] . ";");
        eval("self::\$messageMissingLicensePlates = " . $rows[562]['items'] . ";");
        eval("self::\$messageDuplicateLicensePlates = " . $rows[553]['items'] . ";");
        eval("self::\$messageUpdateSuccess = " . $rows[585]['items'] . ";");
        eval("self::\$messageSearch = " . $rows[569]['items'] . ";");
        eval("self::\$messageDelete = " . $rows[602]['items'] . ";");
        eval("self::\$messageDeleteSuccess = " . $rows[604]['items'] . ";");

        //Cest
        eval("self::\$usernameTrue = " . $rows_cest[527]['values_input'] . ";");
        eval("self::\$passwordTrue = " . $rows_cest[528]['values_input'] . ";");
        eval("self::\$bangSoXe = " . $rows_cest[532]['values_input'] . ";");
        eval("self::\$soCho = " . $rows_cest[533]['values_input'] . ";");
        eval("self::\$soChoSua = " . $rows_cest[560]['values_input'] . ";");
        eval("self::\$bangSoXeSai = " . $rows_cest[568]['values_input'] . ";");
        eval("self::\$bangSoXeSua = " . $rows_cest[582]['values_input'] . ";");

    }
}
BusPage::setProperties();
var_dump('<br>');
var_dump(BusPage::$urlAdmin);var_dump('<br>');
var_dump(BusPage::$urlBus);var_dump('<br>');
var_dump(BusPage::$username);var_dump('<br>');
var_dump(BusPage::$password);var_dump('<br>');
var_dump(BusPage::$loginButton);var_dump('<br>');
var_dump(BusPage::$newButton);var_dump('<br>');
var_dump(BusPage::$addButton);var_dump('<br>');
var_dump(BusPage::$searchButton);var_dump('<br>');
var_dump(BusPage::$editIcon);var_dump('<br>');
var_dump(BusPage::$deleteIcon);var_dump('<br>');
var_dump(BusPage::$updateButton);var_dump('<br>');
var_dump(BusPage::$cancelButton);var_dump('<br>');
var_dump(BusPage::$continueButton);var_dump('<br>');
var_dump(BusPage::$licensePlates);var_dump('<br>');
var_dump(BusPage::$seats);var_dump('<br>');
var_dump(BusPage::$messageAddSuccess);var_dump('<br>');
var_dump(BusPage::$messageMissingData);var_dump('<br>');
var_dump(BusPage::$messageMissingLicensePlates);var_dump('<br>');
var_dump(BusPage::$messageDuplicateLicensePlates);var_dump('<br>');
var_dump(BusPage::$messageUpdateSuccess);var_dump('<br>');
var_dump(BusPage::$messageSearch);var_dump('<br>');
var_dump(BusPage::$messageDelete);var_dump('<br>');
var_dump(BusPage::$messageDeleteSuccess);var_dump('<br>');

//Cest
var_dump(BusPage::$usernameTrue);var_dump('<br>');
var_dump(BusPage::$passwordTrue);var_dump('<br>');
var_dump(BusPage::$bangSoXe);var_dump('<br>');
var_dump(BusPage::$soCho);var_dump('<br>');
var_dump(BusPage::$soChoSua);var_dump('<br>');
var_dump(BusPage::$bangSoXeSai);var_dump('<br>');
var_dump(BusPage::$bangSoXeSua);var_dump('<br>');
