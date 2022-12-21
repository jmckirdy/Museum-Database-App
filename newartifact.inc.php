


<form action="index.php" method="post">
<!-- echo "<form action=\"index.php\" method=\"post\">\n"; -->


<h2>Upload an Artifact</h2><br>


Title:<input type="text" size="40" name="title"><br>


Donor:<input type="text" size="40" name="donor"><br>
<br>

Short Description:<br>

<textarea rows="10" cols="50" name="shortdesc"></textarea><br>

<br>

<h3>Upload image/audio/video file</h3>


<input class="button" type="submit" value="Browse for file">
<input type="hidden" name="content" value="browsefile">


<input class="button" type="submit" value="Submit">
<input type="hidden" name="submitted" value="uploadfile">


</form>

