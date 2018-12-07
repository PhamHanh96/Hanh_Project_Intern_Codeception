<?php

    $sql_select_project = "SELECT * FROM project";

    $sql_select_function = "SELECT * FROM function";

    $result_project = $conn->query($sql_select_project);
    $result_function = $conn->query($sql_select_function);

    $html = '';
    $html_project = '';
    $stt = 1;
    while ($rows_function = $result_function->fetch_assoc())
    {
        $html .= '<tr>';
        $html .= '<td>'. $stt++ .'</td>';
        $html .= '<td>'. $rows_function["project_id"] .'</td>';
        $html .= '<td>'. $rows_function["function"] .'</td>';
        $html .= '<td class="edit"><a data-href="'.$rows_function["id"].'">Edit</a></td>';
        $html .= '<td class="delete"><a data-href="'.$rows_function["id"].'">Delete</a></td>';
        $html .= '</tr>';
    }

    if ($result_project->num_rows > 0)
    {
        while ($rows_project = $result_project->fetch_assoc())
        {
            $html_project .= '<option value="'. $rows_project['id'].'">'. $rows_project['project_name'] .'</option>';
        }
    }
?>
<div class="form_center">
    <div class="title"><h3>Manager Function</h3></div>
    <div class="hienthitestcase">
        <form action="add_function.php" method="post">
            <input type="hidden" name="id" id="id" value>
            <fieldset class="form-group">
                <label class="lbl_input" for="project_name">Project_name</label>
                <select class="lbl_input" name="Project_name" required>
                    <option value="">Select Project_name</option>
                    <?php echo $html_project ?>
                </select>
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="name">Function</label>
                <input type="text" class="form-control input-testcase" required id="function" name="name" placeholder="Function">
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
                <th>Project_id</th>
                <th>Function</th>
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
                url: 'add_function.php',
                data: {
                    id      : id,
                    type    : 'edit'
                },
                success: function (res) {
                    obj = JSON.parse(res);
                    jQuery('#id').val(obj.id);
                    jQuery('#function').val(obj.function);
                    jQuery('[name="submit"]').val('Edit');
                    jQuery('[value=' + obj.project_id + ']').attr('selected', true);
                    jQuery('#id').attr('readonly', true);
                }
            })
        });

        $('.delete').click(function() {
            if (confirm("ban co muon xoa khong?")) {
                var id = $(this).find('a').attr('data-href');
                var delete_node = $(this);
                $.ajax({
                    url: 'add_function.php',
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