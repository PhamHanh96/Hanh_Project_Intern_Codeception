<?php

    $sql_select_testcase = "SELECT * FROM testcase";

    $sql_select_function = "SELECT * FROM function";

    $result_testcase = $conn->query($sql_select_testcase);
    $result_function = $conn->query($sql_select_function);

    $html = '';
    $html_function = '';
    $stt = 1;

    while ($rows_testcase = $result_testcase->fetch_assoc())
    {
        $html .= '<tr>';
        $html .= '<td>'. $stt++ .'</td>';
        $html .= '<td>'. $rows_testcase["id"] .'</td>';
        $html .= '<td>'. $rows_testcase["function_id"] .'</td>';
        $html .= '<td>'. $rows_testcase["name_of_testcase"] .'</td>';
        $html .= '<td>'. $rows_testcase["description"] .'</td>';
        $html .= '<td class="edit"><a data-href="'.$rows_testcase["id"].'">Edit</a></td>';
        $html .= '<td class="delete"><a data-href="'.$rows_testcase["id"].'">Delete</a></td>';
        $html .= '</tr>';
    }

    if ($result_function->num_rows > 0)
    {
        while ($rows_function = $result_function->fetch_assoc())
        {
            $html_function .= '<option value="'. $rows_function['id'].'">'. $rows_function['function'] .'</option>';
        }
    }
?>
<div class="form_center">
    <div class="title"><h3>Manager Testcase</h3></div>
    <div class="hienthitestcase">
        <form action="add_testcase.php" method="post">
            <input type="hidden" name="id" id="id" value>
            <fieldset class="form-group">
                <label class="lbl_input" for="function_name">Function</label>
                <select class="lbl_input" name="Function_name" required>
                    <option value="">Select Function_name</option>
                    <?php echo $html_function ?>
                </select>
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="id">Id</label>
                <input type="text" class="form-control input-testcase" required id="id_testcase" name="id_testcase" placeholder="Id">
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="name">Testcase Name</label>
                <input type="text" class="form-control input-testcase" required id="testcase_name" name="name_of_testcase" placeholder="Testcase_name">
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="name">Description</label>
                <input type="text" class="form-control input-testcase" required id="description" name="description" placeholder="Description">
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
                <th>Id</th>
                <th>Function_Id</th>
                <th>Testcase Name</th>
                <th>Description</th>
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
                url: 'add_testcase.php',
                data: {
                    id_testcase          : id,
                    type                 : 'edit'
                },
                success: function(res) {
                    obj = JSON.parse(res);
                    jQuery('#id_testcase').val(obj.id);
                    jQuery('#testcase_name').val(obj.name_of_testcase);
                    jQuery('#description').val(obj.description);
                    jQuery('[name="submit"]').val('Edit');
                    jQuery('[value='+ obj.function_id +']').attr('selected', true);
                    jQuery('#id_testcase').attr('readonly', true);
                }
            })
        });

        $('.delete').click(function() {
            if (confirm("ban co muon xoa khong?")) {
                var id = $(this).find('a').attr('data-href');
                var delete_node = $(this);
                $.ajax({
                    url: 'add_testcase.php',
                    data: {
                        id_testcase  : "'"+ id +"'",
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