<?php
$con=mysqli_connect("localhost","root","","explorelanka");
if(!$con)
{
	die('Could not connect'.mysqli_error());
}
$sql="select * from login";
$result=mysqli_query($con,$sql);//execute the sql

//display result - using a html table
//create the table heading
?>

<table border="1" align="center" width="550px" bgcolor="white">
	<tr>
		<th>Full Name</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>		
	</tr>
	<?php
//view records in $result
	while($row=mysqli_fetch_array($result))
	{
		echo '<tr>';//new row added to the table
		echo '<td>'.$row['fullName'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['username'].'</td>';
		echo '<td>'.$row['password'].'</td>';
	?>
	<td><a href="deleteUser.php?usn=<?php echo $row['username'];?>">Delete</a></td>
	<td><a href="updateUser.php?usn=<?php echo $row['username'];?>">Update</a></td>

	<?php echo '</tr>';
	}
	?>
	</table>
	<?php
	mysqli_close($con);
	?>

