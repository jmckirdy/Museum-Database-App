<?php

    include("mylibrary/login.php");
    $con = login();


    $search = $_GET['searchFor'];


    $words = explode(" ", $search);


    $phrase = implode("%' AND title LIKE '%", $words);


    $query = "SELECT artid,title,shortdesc from artifacts where title like '%$phrase%'";


    $result = mysqli_query($con, $query) or die('Could not query database at this time');


    echo "<h1>Search Results</h1><br><br>\n";


    if (mysqli_num_rows($result) == 0)


    {


        echo "<h2>Sorry, no artifacts were found with '$search' in them.</h2>";


    } else


    {

        // second parameter for function mysqli below was: MYSQL_ASSOC
        while($row=mysqli_fetch_array($result))


        {


            $artid = $row['artid'];


            $title = $row['title'];


            $shortdesc = $row['shortdesc'];


            echo "<a href=\"index.php?content=showartifact&id=$artid\">$title</a><br>\n";


            echo "$shortdesc<br><br><br><br>\n";


        }


    }


?>