<?php

    $sql_select_version = "SELECT * FROM version";

    $sql_select_testcase = "SELECT * FROM testcase";

    $sql_select_result = "SELECT * FROM result";

    $result_version = $conn->query($sql_select_version);
    $result_testcase = $conn->query($sql_select_testcase);
    $result_result = $conn->query($sql_select_result);

    $html = '';
    $html_version = '';
    $html_testcase = '';
    $stt = 1;
    while ($rows_result = $result_result->fetch_assoc())
    {
        $html .= '<tr>';
        $html .= '<td>'. $stt++ .'</td>';
        $html .= '<td>'. $rows_result["version_id"] .'</td>';
        $html .= '<td>'. $rows_result["testcase_id"] .'</td>';
        $html .= '<td>'. $rows_result["result"] .'</td>';
        $html .= '<td class="edit"><a data-href="'.$rows_result["id"].'">Edit</a></td>';
        $html .= '<td class="delete"><a data-href="'.$rows_result["id"].'">Delete</a></td>';
        $html .= '</tr>';
    }

    if ($result_version->num_rows > 0)
    {
        while ($rows_version = $result_version->fetch_assoc())
        {
            $html_version .= '<option value="'. $rows_version['id'].'">'. $rows_version['version'] .'</option>';
        }
    }

    if($result_testcase->num_rows > 0)
    {
        while ($rows_testcase = $result_testcase->fetch_assoc())
        {
            $html_testcase .= '<option value="'. $rows_testcase['id'].'">'. $rows_testcase['name_of_testcase'] .'</option>';
        }
    }
?>
<div class="form_center">
    <div class="title"><h3>Manager Result</h3></div>
    <div class="hienthitestcase">
        <form action="add_result.php" method="post">
            <input type="hidden" name="id" id="id" value>
            <fieldset class="form-group">
                <label class="lbl_input" for="version">Version</label>
                <select class="lbl_input" name="Version" required>
                    <option value="">Select Version</option>
                    <?php echo $html_version ?>
                </select>
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="testcase">Testcase_name</label>
                <select class="lbl_input" name="Testcase" required>
                    <option value="">Select Testcase</option>
                    <?php echo $html_testcase ?>
                </select>
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="name">Result</label>
                <input type="text" class="form-control input-testcase" required id="result" name="result" placeholder="Result">
            </fieldset>
            <fieldset class="form-group">
                <input type="submit" class="form-control input-testcase btn btn-outline-success" name="submit" value="Add">
            </fieldset>
        </form>
    </div>

    <div class="row">
        <table class="hienthitable">
            <tr class="">
                <th>STT</th>
                <th>Version_id</th>
                <th>Testcase_id</th>
                <th>Result</th>
                <th></th>
                <th></th>
            </tr>
            <?php echo $html; ?>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.edit').click(function () {
            var id = $(this).find('a').attr('data-href');
            $.ajax({
                url: 'add_result.php',
                data: {
                    id      : id,
                    type    : 'edit'
                },
                success: function (res) {
                    obj = JSON.parse(res);
                    jQuery('#id').val(obj.id);
                    jQuery('#result').val(obj.result);
                    jQuery('[name="submit"]').val('Edit');
                    jQuery('[value=' + obj.version_id + ']').attr('selected', true);
                    jQuery('[value=' + obj.testcase_id + ']').attr('selected', true);
                    jQuery('#id').attr('readonly', true);
                }
            })
        });

        $('.delete').click(function() {
            if (confirm("ban co muon xoa khong?")) {
                var id = $(this).find('a').attr('data-href');
                var delete_node = $(this);
                $.ajax({
                    url: 'add_result.php',
                    data: {
                        id          : id,
                        type        : 'delete'
                    },
                    success: function(res) {
                        if (res == 'success') {
                            $(delete_node).parent().remove();
                            alert('Xoa thanh cong');
                        }
                        else {
                            alert('Xoa that bai');
                        }
                    }
                })
            } else {
                return;
            }
        });
    })
</script>