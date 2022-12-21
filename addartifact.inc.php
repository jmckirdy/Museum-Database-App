<?php
include("mylibrary/login.php");

$title = addslashes($_POST['title']);
$donor = addslashes($_POST['donor']);
$shortdesc = addslashes($_POST['shortdesc']);
$ingredients = addslashes(htmlspecialchars($_POST['shortdesc']));
$uploadfile = addslashes(htmlspecialchars($_POST['uploadfile']));

// if (trim($donor) == "")
// {
//     echo "<h2>Sorry, each artifact must have a donor</h2>\n";
// }else
// {

// $con = login();
$query = "INSERT INTO artifacts (title, donor, shortdesc, uploadfile) "  .


        " VALUES ('$title', '$donor', '$shortdesc', '$uploadfile')";


$result = mysqli_query($con, $query) or die(mysqli_error($con));

if ($result)
    echo "<h2>Artifact posted</h2>\n";
else
    echo "<h2>Sorry, there was a problem posting your artifact</h2>\n";

// }


?>