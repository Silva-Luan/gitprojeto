<?php
$con = mysqli_connect("localhost","root","programador","meublogue");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 // Change database
mysqli_select_db($con,"meublogue");

?>