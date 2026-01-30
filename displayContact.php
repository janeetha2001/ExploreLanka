<<<<<<< HEAD
<?php
$con=mysqli_connect("localhost","root","","explorelanka");
if(!$con)
{
	die('Could not connect'.mysqli_error());
}
$sql="select * from contactinfo";
$result=mysqli_query($con,$sql);//execute the sql

//display result - using a html table
//create the table heading
?>

<table border="1" align="center" width="550px" bgcolor="white">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>		
	</tr>
	<?php
//view records in $result
	while($row=mysqli_fetch_array($result))
	{
		echo '<tr>';//new row added to the table
		echo '<td>'.$row['name'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['subject'].'</td>';
		echo '<td>'.$row['message'].'</td>';
	?>
	<td><a href="deleteContact.php?eml=<?php echo $row['email'];?>">Delete</a></td>

	<?php echo '</tr>';
	}
	?>
	</table>
	<?php
	mysqli_close($con);
	?>

=======
<?php
$con=mysqli_connect("localhost","root","","explorelanka");
if(!$con)
{
	die('Could not connect'.mysqli_error());
}
$sql="select * from contactinfo";
$result=mysqli_query($con,$sql);//execute the sql

//display result - using a html table
//create the table heading
?>

<table border="1" align="center" width="550px" bgcolor="white">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>		
	</tr>
	<?php
//view records in $result
	while($row=mysqli_fetch_array($result))
	{
		echo '<tr>';//new row added to the table
		echo '<td>'.$row['name'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['subject'].'</td>';
		echo '<td>'.$row['message'].'</td>';
	?>
	<td><a href="deleteContact.php?eml=<?php echo $row['email'];?>">Delete</a></td>

	<?php echo '</tr>';
	}
	?>
	</table>
	<?php
	mysqli_close($con);
	?>

>>>>>>> 0aa5d86a4971cd29a27f75ebe0c0d06bdf5df2c9
