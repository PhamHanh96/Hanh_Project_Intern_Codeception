<?php
namespace Page\User;
/**
 * Class UserBookTicketPage
 * @package Page\User
 */
class UserBookTicketPage
{
    //Page
    public static $urlHome = '/';
    public static $loginButton = '';
    public static $submitLoginButton = '';
    public static $scheduleButton = '';
    public static $searchFile = '';
    public static $searchButton = '';
    public static $buyTicketButton = '';
    public static $numberOfTickets = '';
    public static $submitBookTicketButton =  '';
    public static $usernameLogin = '';
    public static $passwordLogin = '';
    public static $messageNotLogin1 = '';
    public static $messageNotLogin2 = '';
    public static $messageNotLogin3 = '';
    public static $messageNotLogin4 = '';
    public static $messageLogin1 = '';
    public static $messageLogin2 = '';
    public static $messageLogin3 = '';
    public static $messageLogin4 = '';

    //Cest
    public static $usernameTrue = '';
    public static $passwordTrue = '';
    public static $loTrinh = '';
    public static $soVeAm = '';
    public static $soVeLon = '';
    public static $soVeHopLe = '';

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
        self::$urlHome = str_replace("'", "", trim(explode("=", $rows[454]['items'])[1]));
        eval("self::\$loginButton = " . $rows[494]['items'] . ";");
        eval("self::\$submitLoginButton = " . $rows[497]['items'] . ";");
        eval("self::\$scheduleButton = " . $rows[455]['items'] . ";");
        eval("self::\$searchFile = " . $rows[456]['items'] . ";");
        eval("self::\$searchButton = " . $rows[457]['items'] . ";");
        eval("self::\$buyTicketButton = " . $rows[458]['items'] . ";");
        eval("self::\$numberOfTickets = " . $rows[444]['items'] . ";");
        eval("self::\$submitBookTicketButton = " . $rows[459]['items'] . ";");
        eval("self::\$usernameLogin = " . $rows[495]['items'] . ";");
        eval("self::\$passwordLogin = " . $rows[496]['items'] . ";");
        eval("self::\$messageNotLogin1 = " . $rows[460]['items'] . ";");
        eval("self::\$messageNotLogin2 = " . $rows[467]['items'] . ";");
        eval("self::\$messageNotLogin3 = " . $rows[474]['items'] . ";");
        eval("self::\$messageNotLogin4 = " . $rows[481]['items'] . ";");
        eval("self::\$messageLogin1 = " . $rows[492]['items'] . ";");
        eval("self::\$messageLogin2 = " . $rows[503]['items'] . ";");
        eval("self::\$messageLogin3 = " . $rows[514]['items'] . ";");
        eval("self::\$messageLogin4 = " . $rows[525]['items'] . ";");

        //Page
        eval("self::\$usernameTrue = " . $rows_cest[401]['values_input'] . ";");
        eval("self::\$passwordTrue = " . $rows_cest[402]['values_input'] . ";");
        eval("self::\$loTrinh = " . $rows_cest[456]['values_input'] . ";");
        eval("self::\$soVeAm = " . $rows_cest[466]['values_input'] . ";");
        eval("self::\$soVeLon = " . $rows_cest[473]['values_input'] . ";");
        eval("self::\$soVeHopLe = " . $rows_cest[480]['values_input'] . ";");

    }
}
UserBookTicketPage::setProperties();
var_dump('<br>');
var_dump(UserBookTicketPage::$urlHome);var_dump('<br>');
var_dump(UserBookTicketPage::$loginButton);var_dump('<br>');
var_dump(UserBookTicketPage::$submitLoginButton);var_dump('<br>');
var_dump(UserBookTicketPage::$scheduleButton);var_dump('<br>');
var_dump(UserBookTicketPage::$searchFile);var_dump('<br>');
var_dump(UserBookTicketPage::$searchButton);var_dump('<br>');
var_dump(UserBookTicketPage::$buyTicketButton);var_dump('<br>');
var_dump(UserBookTicketPage::$numberOfTickets);var_dump('<br>');
var_dump(UserBookTicketPage::$submitBookTicketButton);var_dump('<br>');
var_dump(UserBookTicketPage::$messageNotLogin1);var_dump('<br>');
var_dump(UserBookTicketPage::$messageNotLogin2);var_dump('<br>');
var_dump(UserBookTicketPage::$messageNotLogin3);var_dump('<br>');
var_dump(UserBookTicketPage::$messageNotLogin4);var_dump('<br>');
var_dump(UserBookTicketPage::$messageLogin1);var_dump('<br>');
var_dump(UserBookTicketPage::$messageLogin2);var_dump('<br>');
var_dump(UserBookTicketPage::$messageLogin3);var_dump('<br>');
var_dump(UserBookTicketPage::$messageLogin4);var_dump('<br>');

//Page
var_dump(UserBookTicketPage::$usernameTrue);var_dump('<br>');
var_dump(UserBookTicketPage::$passwordTrue);var_dump('<br>');
var_dump(UserBookTicketPage::$loTrinh);var_dump('<br>');
var_dump(UserBookTicketPage::$soVeAm);var_dump('<br>');
var_dump(UserBookTicketPage::$soVeLon);var_dump('<br>');
var_dump(UserBookTicketPage::$soVeHopLe);var_dump('<br>');
