<?php 
$con =mysqli_connect("localhost","root",""); 
if(!$con) 
{ 
die('Could not Connect'.mysqli_error()); 
} 
mysqli_select_db($con,"explorelanka"); 
$sql="INSERT INTO contactinfo(name,email,subject,message) VALUES ('$_POST[name]',  
'$_POST[email]','$_POST[subject]','$_POST[message]')"; 
if(!mysqli_query($con,$sql)) 
{ 
die('Error '.mysqli_error()); 
} 
//Show message box using JavaScript
echo "<script>alert('Message Sent Successfully!');
window.location.href='contact.html';// redirect back to form page
</script>"; 
mysqli_close($con); 
?>


	

