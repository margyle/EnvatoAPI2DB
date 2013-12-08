<?php
//enter your db credentials
$con=mysqli_connect("localhost","user","pass","themes");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//get all themes
$result = mysqli_query($con,"SELECT * FROM envato");

//populate the page with the name an d an image
while($row = mysqli_fetch_array($result))
  {
  echo $row['name'];
  echo "<br>";
  echo '<img src="'. $row['live_preview_url']. '"/>';
  echo "<br>";
  }

mysqli_close($con);
?>
