<?php
require_once "../db_conn.php";
require_once "../Classes/function.php";

if (isset($_POST['submit']))
{
    $project_id = $_POST['Project_name'];
    $function   = $_POST['name'];
    $type = $_POST['submit'];

    if ($type == 'Add')
    {
        $sql = "INSERT INTO function (project_id, function)";
        $sql .= " VALUES ('".$project_id."', '".$function."')";

        if ($conn->query($sql) === true)
        {
            echo "<script>alert('Thêm function thành công');document.location='index.php?cmd=function';</script>";
        }
        else
        {
            echo "<script>alert('Thất bại');document.location='index.php?cmd=function';</script>";
        }
    }
    elseif ($type == 'Edit')
    {
        $id     = $_POST['id'];
        $update = 'UPDATE function ';
        $update .= 'SET function ="'.$function.'"';
        $update .= 'WHERE id = "'.$id.'"';

        if ($conn->query($update) === TRUE) {
            echo "<script>alert('Cập nhật function thành công');document.location='index.php?cmd=function';</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

elseif (isset($_GET) && ($_GET['type'] == 'edit'))
{
    $sql_select = "SELECT * FROM function WHERE id = '".$_GET['id']."'";
    $rs = $conn->query($sql_select);

    if ($rs->num_rows > 0)
    {
        $json = json_encode($rs->fetch_assoc());
        echo $json;
    }
}

elseif (isset($_GET) && ($_GET['type'] == 'delete'))
{
    $myFunction = new myFunction;
    $condition = "function_id = " .  $_GET['id'];
    if ($myFunction->checkDelelte('testcase', $condition))
    {
        $sql = "DELETE FROM function WHERE id = " . $_GET['id'];

        if ($conn->query($sql) == true)
        {
            echo "success";
        }
        else
        {
            echo "error sql";
        }
    }
    else
    {
        echo "error";
    }
}