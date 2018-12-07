<?php
require_once "../Classes/function.php";
require_once "../db_conn.php";

if (isset($_POST['testcase_id']))
{
    $myFunction = new myFunction();

    //$query = 'SELECT fieds FROM field WHERE id = ' . $_POST['field_id'];
    //LEFT JOIN testscript AS ts ON ts.testcase_id = tc.id
    $query_field = "
              SELECT *,tc.id AS testcase_id FROM testcase AS tc
              LEFT JOIN function AS f ON tc.function_id = f.id   
              WHERE tc.id = '". $_POST["testcase_id"] ."'";

    $result = $conn->query($query_field);
    $fields = $result->fetch_assoc();

//    $query_table = 'SELECT r.*, t.result, f.function, re.result, v.version FROM report as r
//                    LEFT JOIN testcase as t ON r.id_function = t.function_id and r.id_testcase = t.id
//                    LEFT JOIN function as f ON r.id_function = f.id
//                    LEFT JOIN result as re ON r.id_testcase = re.testcase_id
//                    WHERE t.id = "'. $_POST["testcase_id"] .'"';

    $query_table = 'SELECT r.*, v.version, f.function, re.result FROM report as r
                    LEFT JOIN testcase as t ON r.id_function = t.function_id and r.id_testcase = t.id
                    LEFT JOIN function as f ON r.id_function = f.id
                    LEFT JOIN result as re ON r.id_testcase = re.testcase_id and r.id_version = re.version_id
                    LEFT JOIN version as v ON r.id_version = v.id
                    WHERE t.id = "'. $_POST["testcase_id"] .'"';

    $result_2 = $conn->query($query_table);
        $tables = array();
        while ($table = $result_2->fetch_assoc())
        {
            array_push($tables, $table);
        }

    $loadTable = $myFunction->loadTable($tables);
    $loadFields = $myFunction->loadField($fields);

    $array = array($loadTable, $loadFields);
    $json = json_encode($array, true);
    echo $json;
}

