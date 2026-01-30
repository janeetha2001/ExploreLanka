<<<<<<< HEAD
<?php
$con=mysqli_connect("localhost","root","","explorelanka");
if(!$con)
{
	die('Could not connect'.mysqli_error());
}
//requesting text box values from previous code
$name=$_POST['name'];
$email=$_POST['email'];
$un=$_POST['username'];
$pw=$_POST['password'];

//update details table
$sql="update login set 
fullName='$name',
email='$email',
password='$pw' where username='$un'";

$result=mysqli_query($con,$sql);
if($result)
{
	echo '<h1>Record Successfully</h1>';
	echo "<a href='displayUser.php'> View Students</a>";
}
else
	echo 'Error';
mysqli_close($con);
?>
=======
<?php
$con=mysqli_connect("localhost","root","","explorelanka");
if(!$con)
{
	die('Could not connect'.mysqli_error());
}
//requesting text box values from previous code
$name=$_POST['name'];
$email=$_POST['email'];
$un=$_POST['username'];
$pw=$_POST['password'];

//update details table
$sql="update login set 
fullName='$name',
email='$email',
password='$pw' where username='$un'";

$result=mysqli_query($con,$sql);
if($result)
{
	echo '<h1>Record Successfully</h1>';
	echo "<a href='displayUser.php'> View Students</a>";
}
else
	echo 'Error';
mysqli_close($con);
?>
>>>>>>> 0aa5d86a4971cd29a27f75ebe0c0d06bdf5df2c9
