<!-- <h1>Artifacts</h1><br> -->

<?php
include("mylibrary/login.php");
// include("mylibrary/h1test.php");

$con = login();

$artid = $_GET['id'];
$catid = $_GET['id'];



// NEW CODE 4 SHOWING H1 TITLE

$title = $_GET['id']; // id is just index number
$query = "SELECT * FROM categories WHERE catid = $title;"; // SQL query, $title is still index num
$result = mysqli_query($con, $query) or die(mysqli_error($con));

if (mysqli_num_rows($result) == 0) // error handling
{
   echo "<h3>No Category Title.</h3>";
} 
else
{
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) // !def. $row var
   {

    $title = $row['title']; // re-assigns the title row to $title
    echo "<h1>$title Artifacts</h1><br>"; // finally echos the real title
    
   }
}




// SELECT all from artifacts where catid = catid-clicked-on
// Order by asc. same as .main file
$query = "SELECT * from artifacts where catid = $catid;";
$result = mysqli_query($con, $query) or die('Sorry, did NOT work!');


if (mysqli_num_rows($result) == 0) 
{
    echo "Sorry, there are no artifacts in this category.";
} 
else 
{
    echo "<a href=\"index.php\">[Return]</a>";
    echo "<a href=#bottom>[Bottom]</a>";
    echo "<hr><br>";
    echo "<table>";
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {

        $title = $row['title'];
        $donor = $row['donor'];
        $shortdesc = $row['shortdesc']; 

        $catid = $row['catid'];
        $artid = $row['artid'];

        echo "<h2>$title</h2><br>\n";
        echo "<h3>Short Description:</h3>\n";
        echo "$shortdesc<br><br>\n";

        echo "<a href=\"index.php?content=showartifact&id=$artid\">$title</a><br>\n";
        // HERE, id, class, <img> doesn't want to change
        echo "<img id=\"tile-image\" src=\"showimage2.php?id=$artid\">";
        echo "<br><hr>";
    }
    echo "</table>";

    echo "<div id=\"bottom\"></div>";
    echo "<a href=\"index.php\">[Return]</a>";
    echo "<a href=#top>[Top]</a>";

}


?>

<br>
<br>
<br>
<br>