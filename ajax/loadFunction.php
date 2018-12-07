<?php
require_once "../Classes/function.php";
require_once "../db_conn.php";

if (isset($_POST['project_id']))
{
    $rs = '';
    $myFunction = new myFunction();
    $query_project = "SELECT f.id, f.function FROM function AS f
                      LEFT JOIN project AS pr ON f.project_id = pr.id
                      WHERE f.project_id = '". $_POST["project_id"] ."'";
    $result_function = $conn->query($query_project);
    while ($function = $result_function->fetch_assoc())
    {
        $rs .= '<option class="function_1" value="'. $function["id"] .'">'. $function['function'] . '</option>';
    }

    echo $rs;
}