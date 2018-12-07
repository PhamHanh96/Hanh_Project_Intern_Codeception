<?php require_once "../db_conn.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="api/sidebarmenu/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="doabroad">
        <div class="doabroad-left"><a href="index.php">Input Data For System</a></div>
        <div class="doabroad-right"></div>
    </div>
</header>
    <div class="row">
        <div class="col-sm-3 col-left">
            <div id='cssmenu'>
                <ul>
                    <li class='<?php if($_GET['cmd'] == 'project') {echo "active" ;}  else  {echo "";} ; ?>'>
                        <a href='index.php?cmd=project'><span">Project</span></a>
                    </li>
                    <li class='<?php if($_GET['cmd'] == 'function') {echo "active" ;}  else  {echo "";} ; ?>'>
                        <a href='index.php?cmd=function'><span>Function</span></a>
                    </li>
                    <li class='<?php if($_GET['cmd'] == 'testcase') {echo "active" ;}  else  {echo "";} ; ?>'>
                        <a href="index.php?cmd=testcase" ><span>TestCase</span></a>
                    </li>
                    <li class='<?php if($_GET['cmd'] == 'result') {echo "active" ;}  else  {echo "";} ; ?>'>
                        <a href="index.php?cmd=result" ><span>Result</span></a>
                    </li>
                    <li class='<?php if($_GET['cmd'] == 'testscript') {echo "active" ;}  else  {echo "";} ; ?>'>
                        <a href="index.php?cmd=testscript"><span>TestScript</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 col-right">
            <?php
                if (isset($_GET['cmd']))
                {
                    $cmd = $_GET['cmd'];

                    $cmd = ($cmd != '') ? $cmd : 'index';

                    include $cmd . '.php';
                }
            ?>
        </div>
    </div>
    </div>
</body>
</html>
