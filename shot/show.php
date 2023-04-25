<!DOCTYPE html>
<html>
<head>
	<title>show table</title>
</head>
<body>
<?php 

include ('config.php');
$sql ="select * from users";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);


if ($total=mysqli_num_rows($data)) {
	?>
	<table border="2">
<tr>
<th>id</th>
<th>username</th>
<th>gmail</th>
<th>password</th>
<th>place</th>
<th>aadhar_no</th>
<th>ph_no</th>
<th>update</th>
<th>payment</th>
</tr>

	<?php
	
	while ($result = mysqli_fetch_array($data)) {

		echo " 
			<tr>
				<td>".$result['id']."</td>
				<td>".$result['username']."</td>
				<td>".$result['gmail']."</td>
                <td>".$result['password']."</td>
				<td>".$result['place']."</td>
                <td>".$result['aadhar_no']."</td>
                <td>".$result['ph_no']."</td>
				 
				<td><a href='update.php?id=$result[id] & username=$result[username] & gmail=$result[gmail]  &  password=$result[password] & place=$result[place]  & aadhar_no=$result[aadhar_no]  & ph_no=$result[ph_no] '> update </a></td>
				<td><a href='payment.html'?id=$result[id] '>payment </a></td>
			</tr>
		";
	}
 }
else
{
 	echo "no record found";
}

?>
</table>
</body>
</html>	
 <!--------- echo "<br>".$result['id']."  ".$result['firstname']." ".$result['lastname']." ".$result['gmail']."  ".$result['number']."  ".$result['address']."<br>";_----->