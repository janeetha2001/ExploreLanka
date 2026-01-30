<<<<<<< HEAD
<?php 
$con =mysqli_connect("localhost","root",""); 
if(!$con) 
{ 
die('Could not Connect'.mysqli_error()); 
} 
mysqli_select_db($con,"explorelanka"); 
$sql="INSERT INTO login(fullName,email,username,password) VALUES ('$_POST[name]','$_POST[email]','$_POST[username]',  
'$_POST[password]')"; 
if(!mysqli_query($con,$sql)) 
{ 
die('Error'.mysqli_error());
}
mysqli_close($con); 
=======
<?php 
$con =mysqli_connect("localhost","root",""); 
if(!$con) 
{ 
die('Could not Connect'.mysqli_error()); 
} 
mysqli_select_db($con,"explorelanka"); 
$sql="INSERT INTO login(fullName,email,username,password) VALUES ('$_POST[name]','$_POST[email]','$_POST[username]',  
'$_POST[password]')"; 
if(!mysqli_query($con,$sql)) 
{ 
die('Error'.mysqli_error());
}
mysqli_close($con); 
>>>>>>> 0aa5d86a4971cd29a27f75ebe0c0d06bdf5df2c9
?>