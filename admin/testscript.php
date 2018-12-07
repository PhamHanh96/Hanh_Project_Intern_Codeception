<?php

$sql_select_testscript = "SELECT * FROM testscript";

$sql_select_testcase = "SELECT * FROM testcase";

$result_testcase = $conn->query($sql_select_testcase);
$result_testscript = $conn->query($sql_select_testscript);

$html = '';
$html_testcase = '';
$stt = 1;

while ($rows_testscript = $result_testscript->fetch_assoc())
{
    $html .= '<tr>';
    $html .= '<td>'. $stt++ .'</td>';
    $html .= '<td>'. $rows_testscript["testcase_id"] .'</td>';
    $html .= '<td>'. $rows_testscript["actions"] .'</td>';
    $html .= '<td>'. $rows_testscript["steps"] .'</td>';
    $html .= '<td>'. $rows_testscript["items"] .'</td>';
    $html .= '<td>'. $rows_testscript["values_input"] .'</td>';
    $html .= '<td>'. $rows_testscript["lable"] .'</td>';
    $html .= '<td class="edit"><a data-href="'.$rows_testscript["id"].'">Edit</a></td>';
    $html .= '<td class="delete"><a data-href="'.$rows_testscript["id"].'">Delete</a></td>';
    $html .= '</tr>';
}

if ($result_testcase->num_rows > 0)
{
    while ($rows_testcase = $result_testcase->fetch_assoc())
    {
        $html_testcase .= '<option value="'. $rows_testcase['id'].'">'. $rows_testcase['name_of_testcase'] .'</option>';
    }
}
?>
<div class="form_center">
    <div class="title"><h3>Manager Testcript</h3></div>
    <div class="hienthitestcase">
        <form action="add_testscript.php" method="post">
            <input type="hidden" name="id" id="id" value>
            <fieldset class="form-group">
                <label class="lbl_input" for="function_name">Testcase</label>
                <select class="lbl_input" name="Testcase_name" required>
                    <option value="">Select Testcase_name</option>
                    <?php echo $html_testcase ?>
                </select>
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="name"> Actions</label>
                <input type="text" class="form-control input-testcase" required id="actions" name="actions" placeholder="Actions">
            </fieldset>
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="name">Steps</label>
                <input type="text" class="form-control input-testcase" required id="steps" name="steps" placeholder="Steps">
            </fieldset>
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="name">Items</label>
                <input type="text" class="form-control input-testcase" required id="items" name="items" placeholder="Items">
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="name">Values_input</label>
                <input type="text" class="form-control input-testcase" required id="values_input" name="values_input" placeholder="Values_input">
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="name">Lable</label>
                <input type="text" class="form-control input-testcase" required id="lable" name="lable" placeholder="Lable">
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
                <th>Testcase_Id</th>
                <th>Actions</th>
                <th>Steps</th>
                <th>Items</th>
                <th>Values Input</th>
                <th>Lable</th>
                <th></th>
                <th></th>
            </tr>
            <?php echo $html; ?>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.edit').click(function() {
            var id = $(this).find('a').attr('data-href');
            $.ajax({
                url: 'add_testscript.php',
                data: {
                    id              : id,
                    type            : 'edit'
                },
                success: function(res) {
                    obj = JSON.parse(res);
                    jQuery('#id').val(obj.id);
                    jQuery('#actions').val(obj.actions);
                    jQuery('#steps').val(obj.steps);
                    jQuery('#items').val(obj.items);
                    jQuery('#values_input').val(obj.values_input);
                    jQuery('#lable').val(obj.lable);
                    jQuery('[name="submit"]').val('Edit');
                    jQuery('[value='+ obj.testcase_id +']').attr('selected', true);
                    jQuery('#id').attr('readonly', true);
                }
            })
        });
        $('.delete').click(function() {
            if (confirm("ban co muon xoa khong?")) {
                var id = $(this).find('a').attr('data-href');
                var delete_node = $(this);
                $.ajax({
                    url: 'add_testscript.php',
                    data: {
                        id  : "'"+ id +"'",
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