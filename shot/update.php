<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>

<form action="" method="get">
	<input type="text" name="id" placeholder="id" value="<?php echo $_GET['id']; ?>">   <br><br>
	<input type="text" name="username" placeholder="username" value="<?php echo $_GET['username']; ?>"><br><br>
	<input type="gmail" name="gmail" placeholder="gmail" value="<?php echo $_GET['gmail']; ?>"><br><br>
    <input type="password" name="password" placeholder="password" value="<?php echo $_GET['password']; ?>"><br><br>
	<input type="text" name="place" placeholder="place" value="<?php echo $_GET['place']; ?>"><br><br>
    <input type="number" name="aadhar_no" placeholder="aadhar_no" value="<?php echo $_GET['aadhar_no']; ?>"><br><br>
    <input type="number" name="ph_no" placeholder="ph_no" value="<?php echo $_GET['ph_no']; ?>"><br><br>
	<input type="submit" name="submit" value="update">
	
</form>


<?php 
error_reporting(0);
include ('config.php');
if ($_GET['submit'])
{
	$id = $_GET['id'];
	$username = $_GET['username'];
    $gmail = $_GET['gmail'];
	$password = $_GET['password'];
    $place = $_GET['place'];
    $aadhar_no = $_GET['aadhar_no'];
	$ph_no = $_GET['ph_no'];
 


 	$sql="UPDATE users SET username='$username' ,  gmail='$gmail',  password ='$password', place='$place', aadhar_no='$aadhar_no' , ph_no='$ph_no'  WHERE id='$id'";
 	
 	$data=mysqli_query($con, $sql);
   	
 	if ($data) {
 		//echo "record update";
 		header('location:payment.html');
 	}
 	else{
 		echo "not update";
 	}
}
else
{
	echo "click on  button to save the change";
}
?>

</body>
</html>