<<<<<<< HEAD
<?php 
  $con=mysqli_connect("localhost","root","","explorelanka"); 
 if(!$con) 
 { 
  die('Could Not Connect:'.mysqli_error()); 
 }   
 $email=$_GET['eml']; 
$sql="DELETE FROM contactinfo WHERE email='$email'"; 
 $result=mysqli_query($con,$sql); 
  
 if($result) 
 { 
   
  $msg="Record Deleted Successfully..."; 
   ?><font color="#FF0000"><?php 
   echo $msg;?></font><?php 
  echo "<br><br>"; 
  echo "<a href='displayContact.php'> View Result </a>"; 
 } 
 else 
 {     echo "Error";   } 
  mysqli_close($con); 
=======
<?php 
  $con=mysqli_connect("localhost","root","","explorelanka"); 
 if(!$con) 
 { 
  die('Could Not Connect:'.mysqli_error()); 
 }   
 $email=$_GET['eml']; 
$sql="DELETE FROM contactinfo WHERE email='$email'"; 
 $result=mysqli_query($con,$sql); 
  
 if($result) 
 { 
   
  $msg="Record Deleted Successfully..."; 
   ?><font color="#FF0000"><?php 
   echo $msg;?></font><?php 
  echo "<br><br>"; 
  echo "<a href='displayContact.php'> View Result </a>"; 
 } 
 else 
 {     echo "Error";   } 
  mysqli_close($con); 
>>>>>>> 0aa5d86a4971cd29a27f75ebe0c0d06bdf5df2c9
 ?> 