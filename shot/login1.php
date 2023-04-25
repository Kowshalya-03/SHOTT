<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
	
      
</head>
<body>
<div class="row text-center">
	<div class="container">
		<h1>Insert DATA</h1>
	<form action="payment.html" method="post">
	
	<input type="text" name="username" placeholder="username"><br><br>
	<input type="gmail" name="gmail" placeholder="gmail"><br><br>
	<input type="password" name="password" placeholder="password"><br><br>
	<input type="text" name="place" placeholder="place"><br><br>
    <input type="number" name="aadhar_no" placeholder="aadhar_no"><br><br>
    <input type="number" name="ph_no" placeholder="ph_no"><br><br>
	<input type="submit" name="submit" value="payment"><br><br>
	
	</form>

<button ><a href="show.php">UPDATE</a></button>
	</div>

	<div>
	
</div>
</div>

</body>
</html>

<style>
body {
 background-image: url("n.jpg");
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:  100% 100%;;
}
</style>


<?php 
error_reporting(0);
include 'config.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $place = $_POST['place'];
	$aadhar_no = $_POST['aadhar_no'];
	$ph_no = $_POST['ph_no'];


	$sql = "INSERT INTO `users` VALUES ('$id','$username','$gmail','$password','$place', '$aadhar_no', '$ph_no')";
	
	$data=mysqli_query($con,$sql);

	if ($data) {
		echo "insert";
	}else
	{
		echo "sorry";
	}
}
?>