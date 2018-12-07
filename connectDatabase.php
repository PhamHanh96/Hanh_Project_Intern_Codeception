<?php

/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/3/2018
 * Time: 1:18 PM
 */
// Kết nối CSDL
$conn = new mysqli('localhost', 'root', '', 'dat_ve');
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Câu SQL lấy danh sách
$sql = "SELECT items FROM testscript";

// Thực thi câu truy vấn và gán vào $result
$result = $conn->query($sql);

echo "<pre>";
print_r($result);
echo "</pre>";

if ($result->num_rows > 0) {
    echo "<br>New record created successfully <br>";
    while ($row = $result->fetch_assoc())
    {
        var_dump($row);
    }
} else {
    echo "<br>Error: insert data fail <br>" . $conn->error;
}

$conn->close();
?>