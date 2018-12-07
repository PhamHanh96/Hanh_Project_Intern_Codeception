<?php
require_once "../db_conn.php";
require_once "../Classes/function.php";

if (isset($_POST['submit']))
{
    $id     = $_POST['id'];
    $name   = $_POST['name'];
    $type = $_POST['submit'];

    if ($type == 'Add')
    {
        $sql = "INSERT INTO project (id, project_name)";
        $sql .= " VALUES ('".$id."', '".$name."')";

        if ($conn->query($sql) === true)
        {
            echo "<script>alert('Thêm project thành công');document.location='index.php?cmd=project';</script>";
        }
        else
        {
            echo "<script>alert('Thất bại');document.location='index.php?cmd=project';</script>";
        }
    }
    elseif ($type == 'Edit')
    {
        $update = 'UPDATE project ';
        $update .= 'SET project_name="'.$name.'"';
        $update .= 'WHERE id = "'.$id.'"';

        if ($conn->query($update) === TRUE) {
            echo "<script>alert('Cập nhật project thành công');document.location='index.php?cmd=project';</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

}
elseif (isset($_GET) && ($_GET['type'] == 'edit'))
{
    $sql_select = "SELECT * FROM project WHERE id = '".$_GET['project_id']."'";
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
    $condition = "project_id LIKE " .  $_GET['project_id'];
    if ($myFunction->checkDelelte('function', $condition))
    {
        $sql = "DELETE FROM project WHERE id LIKE " .  $_GET['project_id'];

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

