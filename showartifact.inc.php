<!-- 
    Include login file
    connect
    setup Query, Selecting all artifacts that are within category
    set $result with mysqli_query(con, query) or die(mysqli_error)

    if/else statement itering over rows as an error check
        else - while looping over mysqli_fetch_array To show all artifacts within category by way of echo
-->

<?php
include("mylibrary/login.php");
$con = login();

$artid = $_GET['id'];

// will need fix after WHERE clause... 
$query = "SELECT * FROM artifacts WHERE artid = $artid;";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

if (mysqli_num_rows($result) == 0){
    echo "<h3>Sorry, there are no artifacts in this category yet.</h3>";
} else {
   while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){

    $artid = $row['artid'];
    $catid = $row['catid'];
    $title = $row['title'];

    $shortdesc = $row['shortdesc'];
    $donor = $row['donor'];
    $date = $row['date'];

    echo "<h1>$title</h1>\n";
    echo "donated on $date<br>\n";


    
    // WANT ANOTHER SET OF [LINKS], SAME AS BOTTOM, MESSES UP $artid THO
    // echo "<a href=\"index.php?content=expandcategory&id=$catid\">[Return]</a>";
    // $artid = $artid + 1;
    // echo "<a href=\"index.php?content=showartifact&id=$artid\">[Next]</a>";
    // $artid = $artid - 2;
    // echo "<a href=\"index.php?content=showartifact&id=$artid\">[Previous]</a><hr>";

    echo "<br><h3>Short Description:</h3>\n";
    echo "$shortdesc<br><br>\n";
    // echo "<a href=\"index.php?content=expandcategory&id=$catid\">$title</a> Here's a Picuture =><br>\n";
    echo "<img class=\"artifactimage\" src=\"showimage2.php?id=$artid\" alt=\"$title\"><br>";

    echo "<hr><a href=\"index.php?content=expandcategory&id=$catid\">[Return]</a>";
    // INCREMENTS OR DECREMENTS artid
    // WANT THIS AT THE TOP BUT IT MESSES UP THE $artid VALUE FOR NEXT LINES!!!
    $artid = $artid - 1;
    echo "<a href=\"index.php?content=showartifact&id=$artid\">[Previous]</a>";
    $artid = $artid + 2;
    echo "<a href=\"index.php?content=showartifact&id=$artid\">[Next]</a>";
    
    }
}

echo "<br><br>"

?>

<br>
