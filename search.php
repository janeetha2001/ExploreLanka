<?php 
 $con=mysqli_connect("localhost","root","","explorelanka"); 
  
 if(!$con) 
 { 
  die('Could not connect'.mysqli_error()); 
 } 
  
 $un=$_POST['username']; // form text box value 
  
 $sql="Select * From login Where username='".$un."'"; 
  
 $result=mysqli_query($con,$sql); 
 $row=mysqli_fetch_array($result); 
 //view record 
 if($row>0) 
 {   
  ?> 
  <h2 align="center">Search Result</h2> 
  <center><table border="1" width="500px"> 
  <tr> 
     <td>Full Name</td> 
     <td><?php echo $row['fullName'];?></td> 
     </tr> 
   
  <tr> 
     <td>Email</td> 
     <td><?php echo $row['email'];?></td> 
     </tr> 
   
  <tr> 
     <td>Username</td> 
     <td><?php echo $row['username'];?></td> 
     </tr> 
  <tr> 
     <td>Password</td> 
     <td><?php echo $row['password'];?></td> 
     </tr> 
    </table> </center>
    <?php  
    }  // end of if 
 else 
 {  
   echo "<h2>Sorry, Username Not Exist !</h2>"; 
 } 
    mysqli_close($con); 