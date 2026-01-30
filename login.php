<<<<<<< HEAD
<?php
session_start();
$con=mysqli_connect("localhost","root","","explorelanka");
if(!$con)
{
	die('could not connect'.mysqli_error());       
}
$un=$_POST['username'];
$pw=$_POST['password'];

$sql="select * from login where username='$un' and password='$pw'";
$login=mysqli_query($con,$sql);//Execute

if(mysqli_num_rows($login)==1){
	if($un==="admin" && $pw==="2001"){
		$_SESSION['user']=$un;
header("Location: admin.html");
exit();
}else{
	$_SESSION['user']=$un;
 }
include 'home.html';//for normal users
exit();
}else{
	echo "<script>alert('Invalid Username or Password'); window.location.href='index.html';</script>";
} 
mysqli_close($con);
=======
<?php
session_start();
$con=mysqli_connect("localhost","root","","explorelanka");
if(!$con)
{
	die('could not connect'.mysqli_error());       
}
$un=$_POST['username'];
$pw=$_POST['password'];

$sql="select * from login where username='$un' and password='$pw'";
$login=mysqli_query($con,$sql);//Execute

if(mysqli_num_rows($login)==1){
	if($un==="admin" && $pw==="2001"){
		$_SESSION['user']=$un;
header("Location: admin.html");
exit();
}else{
	$_SESSION['user']=$un;
 }
include 'home.html';//for normal users
exit();
}else{
	echo "<script>alert('Invalid Username or Password'); window.location.href='index.html';</script>";
} 
mysqli_close($con);
>>>>>>> 0aa5d86a4971cd29a27f75ebe0c0d06bdf5df2c9
?>