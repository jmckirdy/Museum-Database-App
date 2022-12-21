<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>McBride Museum Archives</title>
</head>

<body>


    <div id="header">
        <?php include("header.inc.php"); ?>
    </div>

    <!-- BREADCRUMB -->
    <div class="test">
        <?php include("breadcrumb.inc.php"); ?>
    </div>

    <br><br><br>
    <div id="content">
        <div class="nav">
            <?php include("nav.inc.php"); ?>
        </div>



        
        <!-- MAIN CONTENT -->
        <div class="main">
            <?php
            if (!isset($_REQUEST['content']))
                include("main.inc.php");
            else {
                $content = $_REQUEST['content'];
                $nextpage = $content . ".inc.php";
                include($nextpage);
            }
            ?>
        </div>


    </div>

    <div class="footer">
        <?php include("footer.inc.php"); ?>
    </div>
</body>
</html>