<?php
namespace Page\Admin;
/**
 * Class RoutePage
 * @package Page\Admin
 */
class RoutePage
{
    //Page
    public static $urlAdmin = '';
    public static $urlRoute = '';
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
    public static $whereStart = '';
    public static $whereTo = '';
    public static $length = '';
    public static $time = '';
    public static $prices = '';
    public static $messageAddSuccess = '';
    public static $messageMissingCodeRoute = '';
    public static $messageMissingLength = '';
    public static $messageSearch = '';
    public static $messageUpdateSuccess = '';
    public static $messageUpdateMissingTime = '';
    public static $messageDelete = '';
    public static $messageDeleteSuccess = '';

    //Cest
    public static $usernameTrue = '';
    public static $passwordTrue = '';
    public static $maTuyenDuong = '';
    public static $maTuyenDuongSai = '';
    public static $benDi = '';
    public static $benDen = '';
    public static $quangDuong = '';
    public static $thoiGian = '';
    public static $giaVe = '';

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
        self::$urlRoute = str_replace("'", "", trim(explode("=", $rows[241]['items'])[1]));
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
        eval("self::\$codeRoute = " . $rows[243]['items'] . ";");
        eval("self::\$whereStart = " . $rows[244]['items'] . ";");
        eval("self::\$whereTo = " . $rows[245]['items'] . ";");
        eval("self::\$length = " . $rows[246]['items'] . ";");
        eval("self::\$time = " . $rows[247]['items'] . ";");
        eval("self::\$prices = " . $rows[248]['items'] . ";");
        eval("self::\$messageAddSuccess = " . $rows[250]['items'] . ";");
        eval("self::\$messageMissingCodeRoute = " . $rows[263]['items'] . ";");
        eval("self::\$messageMissingLength = " . $rows[276]['items'] . ";");
        eval("self::\$messageSearch = " . $rows[173]['items'] . ";");
        eval("self::\$messageUpdateSuccess = " . $rows[290]['items'] . ";");
        eval("self::\$messageUpdateMissingTime = " . $rows[299]['items'] . ";");
        eval("self::\$messageDelete = " . $rows[225]['items'] . ";");
        eval("self::\$messageDeleteSuccess = " . $rows[236]['items'] . ";");

        //Cest
        eval("self::\$usernameTrue = " . $rows_cest[238]['values_input'] . ";");
        eval("self::\$passwordTrue = " . $rows_cest[239]['values_input'] . ";");
        eval("self::\$maTuyenDuong = " . $rows_cest[243]['values_input'] . ";");
        eval("self::\$maTuyenDuongSai = " . $rows_cest[288]['values_input'] . ";");
        eval("self::\$benDi = " . $rows_cest[244]['values_input'] . ";");
        eval("self::\$benDen = " . $rows_cest[245]['values_input'] . ";");
        eval("self::\$quangDuong = " . $rows_cest[246]['values_input'] . ";");
        eval("self::\$thoiGian = " . $rows_cest[247]['values_input'] . ";");
        eval("self::\$giaVe = " . $rows_cest[248]['values_input'] . ";");


    }
}
RoutePage::setProperties();
var_dump('<br>');
var_dump(RoutePage::$urlAdmin);var_dump('<br>');
var_dump(RoutePage::$urlRoute);var_dump('<br>');
var_dump(RoutePage::$username);var_dump('<br>');
var_dump(RoutePage::$password);var_dump('<br>');
var_dump(RoutePage::$loginButton);var_dump('<br>');
var_dump(RoutePage::$newButton);var_dump('<br>');
var_dump(RoutePage::$addButton);var_dump('<br>');
var_dump(RoutePage::$searchButton);var_dump('<br>');
var_dump(RoutePage::$editIcon);var_dump('<br>');
var_dump(RoutePage::$deleteIcon);var_dump('<br>');
var_dump(RoutePage::$updateButton);var_dump('<br>');
var_dump(RoutePage::$cancelButton);var_dump('<br>');
var_dump(RoutePage::$continueButton);var_dump('<br>');
var_dump(RoutePage::$codeRoute);var_dump('<br>');
var_dump(RoutePage::$whereStart);var_dump('<br>');
var_dump(RoutePage::$whereTo);var_dump('<br>');
var_dump(RoutePage::$length);var_dump('<br>');
var_dump(RoutePage::$time);var_dump('<br>');
var_dump(RoutePage::$prices);var_dump('<br>');
var_dump(RoutePage::$messageAddSuccess);var_dump('<br>');
var_dump(RoutePage::$messageMissingCodeRoute);var_dump('<br>');
var_dump(RoutePage::$messageMissingLength);var_dump('<br>');
var_dump(RoutePage::$messageSearch);var_dump('<br>');
var_dump(RoutePage::$messageUpdateSuccess);var_dump('<br>');
var_dump(RoutePage::$messageUpdateMissingTime);var_dump('<br>');
var_dump(RoutePage::$messageDelete);var_dump('<br>');
var_dump(RoutePage::$messageDeleteSuccess);var_dump('<br>');

//Cest
var_dump(RoutePage::$usernameTrue);var_dump('<br>');
var_dump(RoutePage::$passwordTrue);var_dump('<br>');
var_dump(RoutePage::$maTuyenDuong);var_dump('<br>');
var_dump(RoutePage::$maTuyenDuongSai);var_dump('<br>');
var_dump(RoutePage::$benDi);var_dump('<br>');
var_dump(RoutePage::$benDen);var_dump('<br>');
var_dump(RoutePage::$quangDuong);var_dump('<br>');
var_dump(RoutePage::$thoiGian);var_dump('<br>');
var_dump(RoutePage::$giaVe);var_dump('<br>');
