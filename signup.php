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
?>