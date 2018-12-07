<?php
require_once "../db_conn.php";
require_once "../Classes/function.php";

if (isset($_POST['submit']))
{
    $version_id = $_POST['Version'];
    $testcase_id = $_POST['Testcase'];
    $result   = $_POST['result'];
    $type = $_POST['submit'];

    if ($type == 'Add')
    {
        $sql = "INSERT INTO result (version_id, testcase_id,result)";
        $sql .= " VALUES ('".$version_id."', '".$testcase_id."', '".$result."')";

        if ($conn->query($sql) === true)
        {
            echo "<script>alert('Thêm result thành công');document.location='index.php?cmd=result';</script>";
        }
        else
        {
            echo "<script>alert('Thất bại');document.location='index.php?cmd=result';</script>";
        }
    }
    elseif ($type == 'Edit')
    {
        $id     = $_POST['id'];
        $update = 'UPDATE result ';
        $update .= 'SET result ="'.$result.'"';
        $update .= 'WHERE id = "'.$id.'"';

        if ($conn->query($update) === TRUE) {
            echo "<script>alert('Cập nhật result thành công');document.location='index.php?cmd=result';</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

elseif (isset($_GET) && ($_GET['type'] == 'edit'))
{
    $sql_select = "SELECT * FROM result WHERE id = '".$_GET['id']."'";
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
    $condition = "id = " .  $_GET['id'];
    if ($myFunction->checkDelelte('testcase', $condition))
    {
        $sql = "DELETE FROM result WHERE id = " . $_GET['id'];

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