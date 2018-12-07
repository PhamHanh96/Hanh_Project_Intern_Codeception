<?php
require_once "../Classes/function.php";
require_once "../db_conn.php";

if (isset($_POST['function_id']))
{
    $rs = '';
    $myFunction = new myFunction();
    $query = "SELECT tc.id, tc.name_of_testcase FROM testcase AS tc
              LEFT JOIN function AS f ON tc.function_id = f.id
              WHERE tc.function_id = '". $_POST["function_id"] ."'";
    $result_testcase = $conn->query($query);
    while ($testcase = $result_testcase->fetch_assoc())
    {
        $rs .= '<option class="testcase_1" value="'. $testcase["id"] .'">'. $testcase['name_of_testcase'] . '</option>';
    }

    echo $rs;
}