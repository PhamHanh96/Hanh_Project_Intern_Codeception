<?php
    $sql_select = "SELECT * FROM project";
    $result = $conn->query($sql_select);
    $html = '';
    $stt = 1;

    while ($rows = $result->fetch_assoc())
    {
        $html .= '<tr>';
        $html .= '<td>'. $stt++ .'</td>';
        $html .= '<td>'. $rows["id"] .'</td>';
        $html .= '<td>'. $rows["project_name"] .'</td>';
        $html .= '<td class="edit"><a data-href="'.$rows["id"].'">Edit</a></td>';
        $html .= '<td class="delete"><a data-href="'.$rows["id"].'">Delete</a></td>';
        $html .= '</tr>';
    }
?>
<div class="form_center">
    <div class="title"><h3>Manager Project</h3></div>
    <div class="hienthitestcase">
        <form action="add_project.php" method="post">
            <fieldset class="form-group">
                <label class="lbl_input" for="id">Id</label>
                <input type="text" class="form-control input-testcase" required id="id" name="id" placeholder="Id">
            </fieldset>
            <fieldset class="form-group">
                <label class="lbl_input" for="name">Project_name</label>
                <input type="text" class="form-control input-testcase" required id="name" name="name" placeholder="Project_name">
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
                <th>Name</th>
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
                url: 'add_project.php',
                data: {
                    project_id  : id,
                    type        : 'edit'
                },
                success: function(res) {
                    obj = JSON.parse(res);
                    jQuery('#id').val(obj.id);
                    jQuery('#name').val(obj.project_name);
                    jQuery('[name="submit"]').val('Edit');
                    jQuery('#id').attr('readonly', true);
                }
            })
        });

        $('.delete').click(function() {
            if (confirm("ban co muon xoa khong?")) {
                var id = $(this).find('a').attr('data-href');
                var delete_node = $(this);
                $.ajax({
                    url: 'add_project.php',
                    data: {
                        project_id  : "'"+ id +"'",
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