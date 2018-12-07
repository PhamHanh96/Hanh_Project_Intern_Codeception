<?php
//  Include thư viện PHPExcel_IOFactory vào
include '../../Classes/PHPExcel/IOFactory.php';
require_once '../../db_conn.php';

$inputFileName = '../../testcase.xlsx';

//  Tiến hành đọc file excel
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Lỗi không thể đọc file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//  Lấy thông tin cơ bản của file excel

// Lấy sheet hiện tại

$sheet = $objPHPExcel->getSheet(0);

// Lấy tổng số dòng của file, trong trường hợp này là 6 dòng
$highestRow = $sheet->getHighestRow();

// Lấy tổng số cột của file, trong trường hợp này là 4 dòng
$highestColumn = $sheet->getHighestColumn();

// Khai báo mảng $rowData chứa dữ liệu

//  Thực hiện việc lặp qua từng dòng của file, để lấy thông tin
for ($row = 1; $row <= $highestRow; $row++){
    // Lấy dữ liệu từng dòng và đưa vào mảng $rowData
    $rowData[] = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE,FALSE);
}
unset($rowData[0]);
foreach ($rowData as $items)
{
    $items = array_filter($items[0]);
    $id = $items[1];
    $function_id = $items[0];
    $name_of_testcase = $items[2];
    $description = $items[3];
    $result = $items[8];
    if ($function_id == 0)
    {
        continue;
    }
    $query = "SELECT id FROM testcase WHERE  id LIKE  '$id'";
    $result_exc = $conn->query($query);

    if ($result_exc->num_rows > 0  )
    {
        $id_testcase = $result_exc->fetch_row()[0];

        $query_update = "UPDATE testcase SET id = '" . $id . "',  function_id = '" . $function_id . "', name_of_testcase = '" . $name_of_testcase . "', description = '" . $description . "', result = '" . $result . "' WHERE id = '".$id_testcase."'";
        if ($conn->query($query_update) === TRUE) {
            echo "<br>Record updated successfully<br>";
        } else {
            echo "<br>Error updating record: <br>" . $conn->error;
        }
    }
    else
    {
        $sql = "INSERT INTO testcase (id, function_id, name_of_testcase, description, result)
              VALUES ('" . $id . "', '" . $function_id . "', '" . $name_of_testcase . "','" . $description . "', '" . $result . "')";

        if ($conn->query($sql) === TRUE) {
            echo "<br>New record created successfully on file $file<br>";
        } else {
            echo "<br>Error: insert data fail on file $file<br>" . $conn->error;
        }
    }
}
$conn->close();

////In dữ liệu của mảng
//echo "<pre>";
//print_r($rowData);die;
//echo "</pre>";