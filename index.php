<?php
    require_once "db_conn.php";

    //$query = "SELECT id, name_of_testcase FROM testcase";

    $query_testcase = "SELECT tc.id, tc.name_of_testcase FROM testcase AS tc
                       LEFT JOIN function AS f ON tc.function_id = f.id";

    $query_function = "SELECT f.id, f.function  FROM function AS f
                       LEFT JOIN project AS pr ON f.project_id = pr.id";

    $query_project = "SELECT id, project_name  FROM project";

    $result_testcase = $conn->query($query_testcase);
    $result_function = $conn->query($query_function);
    $result_project = $conn->query($query_project);

    $html_testcase = '';
    $html_function = '';
    $html_project = '';

    if ($result_project->num_rows > 0)
    {
        while ($rows_project = $result_project->fetch_assoc())
        {
            $html_project .= '<option value="'. $rows_project['id'].'">'. $rows_project['project_name'] .'</option>';
        }
    }

    if ($result_function->num_rows > 0)
    {
        while ($rows_function = $result_function->fetch_assoc())
        {
            $html_function .= '<option class="function_1" value="'. $rows_function['id'].'">'. $rows_function['function'] .'</option>';
        }
    }

    if ($result_testcase->num_rows > 0)
    {
        while ($rows_testcase = $result_testcase->fetch_assoc())
        {
            $html_testcase .= '<option class="testcase_1" value="'. $rows_testcase['id'].'">'. $rows_testcase['name_of_testcase'] .'</option>';
        }
    }
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="form_center">
        <div class="row">
            <h1 class="lbl_baocao">Bao Cao</h1>
        </div>

        <div class="row testcase">
            <div class="col-sm-6">
                <p class="lbl_testcast">Project</p>
            </div>
            <div class=" select_project col-sm-6">
                <select class="c-select" name="project">
                    <option value="">Select project</option>
                    <?php echo $html_project ?>
                </select>
            </div>
        </div>

        <div class="row testcase">
            <div class="col-sm-6">
                <p class="lbl_testcast">Function</p>
            </div>
            <div class=" select_function col-sm-6">
                <select class="c-select" name="function">
                    <option value="">Select funtion</option>
                    <?php echo $html_function ?>
                </select>
            </div>
        </div>

        <div class="row testcase">
            <div class="col-sm-6">
                <p class="lbl_testcast">Testcase</p>
            </div>
            <div class=" select_testcase col-sm-6">
                <select class="c-select" name="testcase">
                    <option value="">Select testcase</option>
                   <?php echo $html_testcase ?>
                </select>
            </div>
        </div>

       <div class="hienthitestcase">
           <fieldset class="form-group ">
               <label class="lbl_input" for="formGroupExampleInput">Example label</label>
               <input type="text" class="form-control input-testcase" id="username" placeholder="Example input">
           </fieldset>
           <fieldset class="form-group">
               <label class="lbl_input" for="formGroupExampleInput2">Another label</label>
               <input type="text" class="form-control input-testcase" id="formGroupExampleInput2" placeholder="Example input">
           </fieldset>
       </div>

        <div class="row">
            <table class="hienthitable">
                <tr class="">
                    <th>Version</th>
                    <th>Function</th>
                    <th>Testcase Name</th>
                    <th>Description</th>
                    <th>Time</th>
                    <th>Result</th>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>

<script>
    $(document).ready(function() {
        $('[name=testcase]').change(function() {
            var testcase_id = $(this).val();
            $.ajax({
                url: 'ajax/loadAjax.php',
                type: 'POST',
                data: {testcase_id: testcase_id},
                success: function(res) {
                    $obj = JSON.parse(res);
                    console.log($obj[0]);
                    $('.addtable').remove();
                    $('.hienthitestcase').html($obj[1]);
                    $('.hienthitable').append($obj[0]);
                }
            })
                .done(function() {
                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
        });

        $('[name="function"]').change(function() {
            var function_id = $(this).val();
            $('.testcase_1').remove();
            $.ajax({
                url: 'ajax/loadTestcase.php',
                type: 'POST',
                data: {function_id: function_id},
                success: function(res) {
                    $('.testcase_1').remove();
                    $('[name="testcase"]').append(res);

                }
            })
        });

        $('[name="project"]').change(function() {
            var project_id = $(this).val();
            $('.function_1').remove();
            $.ajax({
                url: 'ajax/loadFunction.php',
                type: 'POST',
                data: {project_id: project_id},
                success: function(res) {
                    $('.function_1').remove();
                    $('[name="function"]').append(res);

                }
            })
        });
    })
</script>
