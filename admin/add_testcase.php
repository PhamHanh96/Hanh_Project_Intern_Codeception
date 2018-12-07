<?php
require_once "../db_conn.php";
require_once "../Classes/function.php";

if (isset($_POST['submit']))
{
    $id_testcase     = $_POST['id_testcase'];
    $function_id = $_POST['Function_name'];
    $testcase_name   = $_POST['name_of_testcase'];
    $description   = $_POST['description'];
    $type = $_POST['submit'];

    if ($type == 'Add')
    {
        $sql = "INSERT INTO testcase (id, function_id, name_of_testcase, description)";
        $sql .= " VALUES ('".$id_testcase."', '".$function_id."', '".$testcase_name."', '".$description."')";

        if ($conn->query($sql) === true)
        {
            echo "<script>alert('Thêm testcase thành công');document.location='index.php?cmd=testcase';</script>";
        }
        else
        {
            echo "<script>alert('Thất bại');document.location='index.php?cmd=testcase';</script>";
        }
    }
    elseif ($type == 'Edit')
    {
        $update = 'UPDATE testcase SET name_of_testcase ="'.$testcase_name.'", description ="'.$description.'" WHERE id = "'.$id_testcase.'"';

        if ($conn->query($update) === TRUE) {
            echo "<script>alert('Cập nhật testcase thành công');document.location='index.php?cmd=testcase';</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

}

elseif (isset($_GET) && ($_GET['type'] == 'edit'))
{
    $sql_select = "SELECT * FROM testcase WHERE id = '".$_GET['id_testcase']."'";
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
    $condition = "testcase_id LIKE " .  $_GET['id_testcase'];
    if ($myFunction->checkDelelte('testscript', $condition))
    {
        $sql = "DELETE FROM testcase WHERE id LIKE " .  $_GET['id_testcase'];

        if ($conn->query($sql) == true)
        {
            echo "success";
        }
        else
        {
            echo "error";
        }
    }
    else
    {
        echo "error";
    }
}