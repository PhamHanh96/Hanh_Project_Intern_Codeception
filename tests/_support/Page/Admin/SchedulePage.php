<?php
namespace Page\Admin;
/**
 * Class SchedulePage
 * @package Page\Admin
 */
class SchedulePage
{
    //Page
    public static $urlAdmin = '';
    public static $urlSchedule = '';
    public static $username = '';
    public static $password = '';
    public static $loginButton = '';
    public static $newButton = '';
    public static $addButton = '';
    public static $searchButton = '';
    public static $editIcon = '';
    public static $deleteIcon = '';
    public static $updateButton = '';
    public static $cancelButton = '';
    public static $continueButton = '';
    public static $codeRoute = '';
    public static $licensePlates = '';
    public static $day = '';
    public static $time = '';
    public static $messageAddSuccess = '';
    public static $messageUpdateSuccess = '';
    public static $messageDelete = '';
    public static $messageDeleteSuccess = '';

    //Cest
    public static $usernameTrue = '';
    public static $passwordTrue = '';
    public static $maTuyenDuong = '';
    public static $maTuyenDuongSua = '';
    public static $bangSoXe = '';
    public static $bangSoXeSua = '';
    public static $ngay = '';
    public static $ngaySua = '';
    public static $gio = '';
    public static $gioSua = '';
    public static $maLoTrinh = '';

    /**
     * @param $value
     * @return array
     */
    public static function returnChoice($value)
    {
        return ['xpath' => "//option[contains(text(), '" . $value . "')]"];
    }

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
        self::$urlSchedule = str_replace("'", "", trim(explode("=", $rows[311]['items'])[1]));
        eval("self::\$username = " . $rows[1]['items'] . ";");
        eval("self::\$password = " . $rows[2]['items'] . ";");
        eval("self::\$loginButton = " . $rows[3]['items'] . ";");
        eval("self::\$newButton = " . $rows[122]['items'] . ";");
        eval("self::\$addButton = " . $rows[130]['items'] . ";");
        eval("self::\$searchButton = " . $rows[172]['items'] . ";");
        eval("self::\$editIcon = " . $rows[180]['items'] . ";");
        eval("self::\$deleteIcon = " . $rows[224]['items'] . ";");
        eval("self::\$updateButton = " . $rows[188]['items'] . ";");
        eval("self::\$cancelButton  = " . $rows[226]['items'] . ";");
        eval("self::\$continueButton = " . $rows[235]['items'] . ";");
        eval("self::\$codeRoute = " . $rows[313]['items'] . ";");
        eval("self::\$licensePlates = " . $rows[315]['items'] . ";");
        eval("self::\$day = " . $rows[317]['items'] . ";");
        eval("self::\$time = " . $rows[318]['items'] . ";");
        eval("self::\$messageAddSuccess = " . $rows[321]['items'] . ";");
        eval("self::\$messageUpdateSuccess = " . $rows[356]['items'] . ";");
        eval("self::\$messageDelete = " . $rows[364]['items'] . ";");
        eval("self::\$messageDeleteSuccess = " . $rows[366]['items'] . ";");

        //Cest
        eval("self::\$usernameTrue = " . $rows_cest[309]['values_input'] . ";");
        eval("self::\$passwordTrue = " . $rows_cest[308]['values_input'] . ";");
        eval("self::\$maTuyenDuong = " . $rows_cest[314]['values_input'] . ";");
        eval("self::\$maTuyenDuongSua = " . $rows_cest[349]['values_input'] . ";");
        eval("self::\$bangSoXe = " . $rows_cest[316]['values_input'] . ";");
        eval("self::\$bangSoXeSua = " . $rows_cest[351]['values_input'] . ";");
        eval("self::\$ngay = " . $rows_cest[317]['values_input'] . ";");
        eval("self::\$ngaySua = " . $rows_cest[352]['values_input'] . ";");
        eval("self::\$gio = " . $rows_cest[319]['values_input'] . ";");
        eval("self::\$gioSua = " . $rows_cest[354]['values_input'] . ";");
        eval("self::\$maLoTrinh = " . $rows_cest[341]['values_input'] . ";");

    }
}
SchedulePage::setProperties();
var_dump('<br>');
var_dump(SchedulePage::$urlAdmin);var_dump('<br>');
var_dump(SchedulePage::$urlSchedule);var_dump('<br>');
var_dump(SchedulePage::$username);var_dump('<br>');
var_dump(SchedulePage::$password);var_dump('<br>');
var_dump(SchedulePage::$loginButton);var_dump('<br>');
var_dump(SchedulePage::$newButton);var_dump('<br>');
var_dump(SchedulePage::$addButton);var_dump('<br>');
var_dump(SchedulePage::$searchButton);var_dump('<br>');
var_dump(SchedulePage::$editIcon);var_dump('<br>');
var_dump(SchedulePage::$deleteIcon);var_dump('<br>');
var_dump(SchedulePage::$updateButton);var_dump('<br>');
var_dump(SchedulePage::$cancelButton);var_dump('<br>');
var_dump(SchedulePage::$continueButton);var_dump('<br>');
var_dump(SchedulePage::$codeRoute);var_dump('<br>');
var_dump(SchedulePage::$licensePlates);var_dump('<br>');
var_dump(SchedulePage::$day);var_dump('<br>');
var_dump(SchedulePage::$time);var_dump('<br>');
var_dump(SchedulePage::$messageAddSuccess);var_dump('<br>');
var_dump(SchedulePage::$messageUpdateSuccess);var_dump('<br>');
var_dump(SchedulePage::$messageDelete);var_dump('<br>');
var_dump(SchedulePage::$messageDeleteSuccess);var_dump('<br>');
//Cest
var_dump(SchedulePage::$usernameTrue);var_dump('<br>');
var_dump(SchedulePage::$passwordTrue);var_dump('<br>');
var_dump(SchedulePage::$maTuyenDuong);var_dump('<br>');
var_dump(SchedulePage::$maTuyenDuongSua);var_dump('<br>');
var_dump(SchedulePage::$bangSoXe);var_dump('<br>');
var_dump(SchedulePage::$bangSoXeSua);var_dump('<br>');
var_dump(SchedulePage::$ngay);var_dump('<br>');
var_dump(SchedulePage::$ngaySua);var_dump('<br>');
var_dump(SchedulePage::$gio);var_dump('<br>');
var_dump(SchedulePage::$gioSua);var_dump('<br>');
var_dump(SchedulePage::$maLoTrinh);var_dump('<br>');

