<?php 

$con=mysqli_connect('localhost','root','','shot') or die("connection failed : ".mysqli_connect_error());

if ($con) {
	 echo "Connection Successfully";
}
else{
	echo "Sorry Some Mistakes is";
}
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>