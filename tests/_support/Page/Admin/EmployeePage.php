<?php
namespace Page\Admin;
/**
 * Class EmployeePage
 * @package Page\Admin
 */
class EmployeePage
{
    //Page
   public static $urlAdmin = '';
   public static $urlEmployee = '';
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
   public static $emailEmployee = '';
   public static $nameEmployee = '';
   public static $phoneEmployee = '';
   public static $identifyCardEmployee = '';
   public static $addressEmployee = '';
   public static $passEmployee = '';
   public static $confirmPassEmployee = '';
   public static $messageAddSuccess = '';
   public static $messageMissingEmail = '';
   public static $messageDuplicateEmail = '';
   public static $messageSearch = '';
   public static $messageUpdate = '';
   public static $messageUpdateMissingPhone = '';
   public static $messageUpdateMissingIdentifyCard = '';
   public static $messageDelete = '';
   public static $messageDeleteSuccess = '';

   //Cest
    public static $usernameTrue = '';
    public static $passwordTrue = '';
    public static $emailNV = '';
    public static $tenNV = '';
    public static $tenNVSua = '';
    public static $sdtNV = '';
    public static $sdtNVSua = '';
    public static $cmndNV = '';
    public static $cmndNVSua = '';
    public static $diaChiNV = '';
    public static $diaChiNVSua = '';
    public static $matKhau = '';
    public static $xacNhanMK = '';
    public static $emailTrungNV = '';
    public static $emailSai = '';
    public static $emailXoa = '';



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
        self::$urlEmployee = str_replace("'", "", trim(explode("=", $rows[121]['items'])[1]));
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
        eval("self::\$emailEmployee = " . $rows[123]['items'] . ";");
        eval("self::\$nameEmployee = " . $rows[124]['items'] . ";");
        eval("self::\$phoneEmployee = " . $rows[125]['items'] . ";");
        eval("self::\$identifyCardEmployee = " . $rows[126]['items'] . ";");
        eval("self::\$addressEmployee = " . $rows[127]['items'] . ";");
        eval("self::\$passEmployee = " . $rows[128]['items'] . ";");
        eval("self::\$confirmPassEmployee = " . $rows[129]['items'] . ";");
        eval("self::\$messageAddSuccess = " . $rows[131]['items'] . ";");
        eval("self::\$messageMissingEmail = " . $rows[145]['items'] . ";");
        eval("self::\$messageDuplicateEmail = " . $rows[160]['items'] . ";");
        eval("self::\$messageSearch = " . $rows[173]['items'] . ";");
        eval("self::\$messageUpdate = " . $rows[189]['items'] . ";");
        eval("self::\$messageUpdateMissingPhone = " . $rows[201]['items'] . ";");
        eval("self::\$messageUpdateMissingIdentifyCard = " . $rows[217]['items'] . ";");
        eval("self::\$messageDelete = " . $rows[225]['items'] . ";");
        eval("self::\$messageDeleteSuccess = " . $rows[236]['items'] . ";");

        //Cest
        eval("self::\$usernameTrue = " . $rows_cest[527]['values_input'] . ";");
        eval("self::\$passwordTrue = " . $rows_cest[528]['values_input'] . ";");
        eval("self::\$emailNV = " . $rows_cest[123]['values_input'] . ";");
        eval("self::\$tenNV = " . $rows_cest[124]['values_input'] . ";");
        eval("self::\$tenNVSua = " . $rows_cest[182]['values_input'] . ";");
        eval("self::\$sdtNV = " . $rows_cest[125]['values_input'] . ";");
        eval("self::\$sdtNVSua = " . $rows_cest[183]['values_input'] . ";");
        eval("self::\$cmndNV = " . $rows_cest[126]['values_input'] . ";");
        eval("self::\$cmndNVSua = " . $rows_cest[184]['values_input'] . ";");
        eval("self::\$diaChiNV = " . $rows_cest[127]['values_input'] . ";");
        eval("self::\$diaChiNVSua = " . $rows_cest[185]['values_input'] . ";");
        eval("self::\$matKhau = " . $rows_cest[128]['values_input'] . ";");
        eval("self::\$xacNhanMK = " . $rows_cest[129]['values_input'] . ";");
        eval("self::\$emailTrungNV = " . $rows_cest[152]['values_input'] . ";");
        eval("self::\$emailSai = " . $rows_cest[172]['values_input'] . ";");
        eval("self::\$emailXoa = " . $rows_cest[223]['values_input'] . ";");

    }
}
EmployeePage::setProperties();
var_dump('<br>');
var_dump(EmployeePage::$urlAdmin);var_dump('<br>');
var_dump(EmployeePage::$urlEmployee);var_dump('<br>');
var_dump(EmployeePage::$username);var_dump('<br>');
var_dump(EmployeePage::$password);var_dump('<br>');
var_dump(EmployeePage::$loginButton);var_dump('<br>');
var_dump(EmployeePage::$newButton);var_dump('<br>');
var_dump(EmployeePage::$addButton);var_dump('<br>');
var_dump(EmployeePage::$searchButton);var_dump('<br>');
var_dump(EmployeePage::$editIcon);var_dump('<br>');
var_dump(EmployeePage::$deleteIcon);var_dump('<br>');
var_dump(EmployeePage::$updateButton);var_dump('<br>');
var_dump(EmployeePage::$cancelButton);var_dump('<br>');
var_dump(EmployeePage::$continueButton);var_dump('<br>');
var_dump(EmployeePage::$emailEmployee);var_dump('<br>');
var_dump(EmployeePage::$nameEmployee);var_dump('<br>');
var_dump(EmployeePage::$phoneEmployee);var_dump('<br>');
var_dump(EmployeePage::$identifyCardEmployee);var_dump('<br>');
var_dump(EmployeePage::$addressEmployee);var_dump('<br>');
var_dump(EmployeePage::$passEmployee);var_dump('<br>');
var_dump(EmployeePage::$confirmPassEmployee);var_dump('<br>');
var_dump(EmployeePage::$messageAddSuccess);var_dump('<br>');
var_dump(EmployeePage::$messageMissingEmail);var_dump('<br>');
var_dump(EmployeePage::$messageDuplicateEmail);var_dump('<br>');
var_dump(EmployeePage::$messageSearch);var_dump('<br>');
var_dump(EmployeePage::$messageUpdate);var_dump('<br>');
var_dump(EmployeePage::$messageUpdateMissingPhone);var_dump('<br>');
var_dump(EmployeePage::$messageUpdateMissingIdentifyCard);var_dump('<br>');
var_dump(EmployeePage::$messageDelete);var_dump('<br>');
var_dump(EmployeePage::$messageDeleteSuccess);var_dump('<br>');

//Cest
var_dump(EmployeePage::$usernameTrue);var_dump('<br>');
var_dump(EmployeePage::$passwordTrue);var_dump('<br>');
var_dump(EmployeePage::$emailNV);var_dump('<br>');
var_dump(EmployeePage::$tenNV);var_dump('<br>');
var_dump(EmployeePage::$tenNVSua);var_dump('<br>');
var_dump(EmployeePage::$sdtNV);var_dump('<br>');
var_dump(EmployeePage::$sdtNVSua);var_dump('<br>');
var_dump(EmployeePage::$cmndNV);var_dump('<br>');
var_dump(EmployeePage::$cmndNVSua);var_dump('<br>');
var_dump(EmployeePage::$diaChiNV);var_dump('<br>');
var_dump(EmployeePage::$diaChiNVSua);var_dump('<br>');
var_dump(EmployeePage::$matKhau);var_dump('<br>');
var_dump(EmployeePage::$xacNhanMK);var_dump('<br>');
var_dump(EmployeePage::$emailTrungNV);var_dump('<br>');
var_dump(EmployeePage::$emailSai);var_dump('<br>');
var_dump(EmployeePage::$emailXoa);var_dump('<br>');
