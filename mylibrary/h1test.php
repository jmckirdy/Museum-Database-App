<h1><?php
// goto db, get category $title, show as H1

$con = login();

$artid = $_GET['id'];
$catid = $_GET['id'];
$title = $_GET['title'];


// TODO: echo the title from `categories` table, from a ref. to the catid u already have.
$query1 = "SELECT $title from categories where catid = $catid;";
$result1 = mysqli_query($con, $query1) or die('Sorry, did NOT work!');

echo $title;

// while($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)){
//     // echo $result1;
//     // echo $title;
// }



if (mysqli_num_rows($result1) == 0) 
{
    echo "Sorry, there are no artifacts in this category.";
} 
else 
{
    // JUST NEEDS TO GET TITLE FROM SOMEWHERE...
    echo $title;
    echo $artid;
    echo $catid;

}
?>
</h1>
