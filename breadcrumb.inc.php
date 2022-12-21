<?php
// include("mylibrary/login.php");
// $con = login();

// $artid = $_GET['id'];
// $catid = $_GET['id'];
// $title = $_GET['id']; // id is just index number

// $query = "SELECT * FROM categories WHERE catid = $title;"; // SQL query, $title is still index num
// $result = mysqli_query($con, $query) or die(mysqli_error($con));

// if (mysqli_num_rows($result) == 0) // error handling
// {
//    echo "<h3>No Category Title.</h3>";
// } 
// else
// {
// while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) // !def. $row var
//    {

//     $title = $row['title']; // re-assigns the title row to $title
//     echo "<h1>$title Artifacts</h1><br>"; // finally echos the real title
//     echo "<a class=\"breadcrumb\" href='index.php'>Categories ></a><br>";
//    }
// }
?>

<a class="breadcrumb" href='index.php'>Categories ></a><br>


