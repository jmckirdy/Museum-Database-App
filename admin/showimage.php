<?php
   header("Content-type: image/jpeg");
   include("../mylibrary/login.php");
   $con = login();

   $artid = $_GET['artid'];

   $query = "SELECT picture from artifacts WHERE artid = $artid";
   $result = mysqli_query($con, $query);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $picture = $row['picture'];
   echo $picture;
?>