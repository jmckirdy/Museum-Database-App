<?php
function login()
{
   $con = mysqli_connect("localhost", "root", "guitar_man", "museum") or die('Could not connect to server');
   return $con;
}
?>