<?php
require_once '../db_conn.php';

class myFunction
{
    public function loadField($fields)
    {
        $data = $this->getValueField($fields['testcase_id']);
        $result = '';

        foreach ($data as $field)
        {
            if (!empty($field['lable']))
            {
                $result .= '               
               <fieldset class="form-group">
                   <label class="lbl_input" for="formGroupExampleInput2">'. $field['lable'] .'</label>
                   <input type="text" class="form-control input-testcase" id="formGroupExampleInput2" value="'. $field["values_input"] .'">
               </fieldset>';
            }
        }

        return $result;
    }

    public function loadTable ($data)
    {
        $html = '';
        //$stt = 1;
        foreach ($data as $record)
        {
            $html .= '
                    <tr class="addtable">
                    <td>'. $record["version"] . '</td>
                    <td>'. $record["function"] . '</td>
                    <td>'. $record["testCaseName"] . '</td>
                    <td>'. $record["description"] . '</td>
                    <td>'. $record["time"] . '</td>
                    <td>'. $record["result"] . '</td>
                </tr>
            ';
        }

        return $html;
    }

    public function getValueField($testcase_id)
    {
        $db = new database();
        $rs = array();
        $query = "SELECT values_input, lable FROM testscript AS ts
                  LEFT JOIN testcase AS tc ON ts.testcase_id = tc.id
                  WHERE tc.id = '". $testcase_id ."'";
        $result = $db->conn->query($query);

        while ($rows = $result->fetch_assoc())
        {
            array_push($rs, $rows);
        }

        return $rs;
    }

    public function checkDelelte($table, $condition)
    {
        $flag = true;
        $db = new database;

        $sql = "SELECT * FROM $table WHERE " . $condition;
        $result = $db->conn->query($sql);

        if ($result->num_rows > 0)
        {
            $flag = false;
        }

        return $flag;
    }
}