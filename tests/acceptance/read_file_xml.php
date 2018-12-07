<?php

require_once '../../db_conn.php';

//xml file path
$path = __DIR__ . "/../_output/report.xml";

//read entire file into string
$xmlFile = file_get_contents($path);

//convert xml string into an object
$xml = simplexml_load_string($xmlFile, "SimpleXMLElement", LIBXML_NOCDATA);

//convert into json
$json = json_encode($xml);

//convert into associative array
$xmlArray = json_decode($json,TRUE);

$testCase = $xmlArray['testsuite']['testcase'];

//$conn = new mysqli('localhost', 'root', '', 'dat_ve');
//
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
foreach ($testCase as $item)
{

    $file = basename($item['@attributes']['file']);
    $testCaseName = $item['@attributes']['name'];
    //$function = $item['@attributes']['class'];
    $description = $item['@attributes']['feature'];
    //$assertions = $item['@attributes']['assertions'];
    $time = $item['@attributes']['time'];

    $query = "SELECT id FROM report WHERE  testCaseName LIKE  " . "'$testCaseName'";

    $result = $conn->query($query);
    if ($result->num_rows > 0)
    {
        $id = $result->fetch_row()[0];
       $query_update = "UPDATE report SET function = '" . $file . "',  testCaseName = '" . $testCaseName . "', description = '" . $description . "', time = '" . $time . "' WHERE id = '".$id."'";
        if ($conn->query($query_update) === TRUE) {
            echo "<br>Record updated successfully<br>";
        } else {
            echo "<br>Error updating record: <br>" . $conn->error;
        }
    }
    else
    {
        $sql = "INSERT INTO report (function, testCaseName, description, time)
              VALUES ('" . $file . "', '" . $testCaseName . "', '" . $description . "'," . $time . ")";

        if ($conn->query($sql) === TRUE) {
            echo "<br>New record created successfully on file $file<br>";
        } else {
            echo "<br>Error: insert data fail on file $file<br>" . $conn->error;
        }
    }
}
$conn->close();
?>