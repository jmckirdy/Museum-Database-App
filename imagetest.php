<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Image Test</title>
<body>
<?php
// include("mylibrary/login.php");
// $con = login();
// $query = "SELECT artid, shortdesc FROM artifacts";
// $result = mysqli_query($con, $query) or die(mysqli_error($con));

// echo "<table width=\"50%\" cellpadding=\"1\" border=\"1\">\n";
// echo "<tr><td>Artifact ID</td><td>Description</td><td>Image</td></tr>\n";
// while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
// {
//    $artid = $row['artid'];
//    $shortdesc = $row['shortdesc'];

//    echo "The last id was: " . $artid;
//    // echo "<tr><td>$artid</td><td>$title</td>\n";
//    echo "<td><img src=\"showimage.php?id=$artid\" width=\"80\" height=\"60\"></td></tr>\n";
// }
// echo "</table>\n";
// Artifact data works, -BLOB
// $catid= $row['catid'];

include("mylibrary/login.php");
$con = login();
$query = "SELECT artid, catid, title, picture FROM artifacts;";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

echo "<table width=\"50%\" cellpadding=\"1\" border=\"1\">\n";
echo "<tr><td>Artifact ID</td><td>Title</td><td>Image</td></tr>\n";
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
   $catid = $row['catid'];
   $artid = $row['artid'];
   $title = $row['title'];
   // $picture = $row['picture'];

   // echo "The last id was: " . $catid . " This is the title:<br><br>" . $title;

   echo "<tr><td>The art id is: " . $artid . "/the catid is: " . $catid . " </td><td> This is the title:" . $title . "</td>\n";
   echo "<td><img src=\"showimage2.php?id=$artid\" width=\"80\" height=\"60\"></td></tr>\n";

   // NO NEED TO ECHO PIC, AS ITS IN THE URL ABOVE NOW.
   // echo $picture;
}
echo "</table>\n";


?>



</body>
</html>