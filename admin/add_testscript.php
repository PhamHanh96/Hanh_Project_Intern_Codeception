<?php
require_once "../db_conn.php";
require_once "../Classes/function.php";

if (isset($_POST['submit']))
{
    $testcase_id = $_POST['Testcase_name'];
    $actions   = $_POST['actions'];
    $steps   = $_POST['steps'];
    $items   = $_POST['items'];
    $values_input   = $_POST['values_input'];
    $lable   = $_POST['lable'];
    $type = $_POST['submit'];

    if ($type == 'Add')
    {
        $sql = "INSERT INTO testscript (testcase_id, actions, steps, items, values_input, lable)";
        $sql .= " VALUES ('".$testcase_id."', '".$actions."', '".$steps."', '".$items."', '".$values_input."', '".$lable."')";

        if ($conn->query($sql) === true)
        {
            echo "<script>alert('Thêm testscript thành công');document.location='index.php?cmd=testscript';</script>";
        }
        else
        {
            echo "<script>alert('Thất bại');document.location='index.php?cmd=testscript';</script>";
        }
    }
    elseif ($type == 'Edit')
    {
        $id     = $_POST['id'];
        $update = 'UPDATE testscript ';
        $update .= 'SET actions ="'.$actions.'", steps ="'.$steps.'", items ="'.$items.'", values_input ="'.$values_input.'", lable ="'.$lable.'"';
        $update .= 'WHERE id = "'.$id.'"';

        if ($conn->query($update) === TRUE) {
            echo "<script>alert('Cập nhật testscript thành công');document.location='index.php?cmd=testscript';</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

}

elseif (isset($_GET) && ($_GET['type'] == 'edit'))
{
    $sql_select = "SELECT * FROM testscript WHERE id = '".$_GET['id']."'";
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
    $condition = "id LIKE " .  $_GET['id'];
    if ($myFunction->checkDelelte('function', $condition))
    {
        $sql = "DELETE FROM testscript WHERE id LIKE " .  $_GET['id'];

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