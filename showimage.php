<?php
   // THIS IS IMPORTANT FILE, IT GENERATES THE IMAGE FOR CATEGORIES OR ARTIFACTS.

   header("Content-type: image/jpeg");
   include("mylibrary/login.php");
   $con = login();

   // Alt: 
   $artid = $_GET['id'];

   $catid = $_GET['id'];

   // Alt: 
   // $query = "SELECT picture from artifacts WHERE artid=$artid";

   $query = "SELECT picture from categories WHERE catid=$catid";
   $result = mysqli_query($con, $query);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $picture = $row['picture'];
   echo $picture;
?>