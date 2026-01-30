<html>
<head>
	<style>
		input{
width: 400px;
height: 50px;
border-radius: 10px;
border: none;
text-shadow: 0 0.2px;
		}
		input:hover{
			background-color: lightgray;

		}
		button{
			background-color: #00008B;
			width: 130px;
			height: 45px;
			border-radius: 15px;
			border: white;
			color: white;
			font-weight: bold;
		}
		button:hover{
			background-color:whitesmoke;
			color:#00008B;		
		}
	</style>
</head>
<body>
<form name="formUpdate" method="post" action="update.php">

<?php
	$con=mysqli_connect("localhost","root","","explorelanka");
	if(!$con)
	{
		die('could not'.mysqli_error());
	}
	
	// catch ino from 'update' link of previous page
	$un=$_GET['usn'];
	$sql="select * from login where username='".$un."'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
?>
<table align="center" width="550px" height="300px">
<tr>
<td>Full Name:</td>
<td><input type="text" name="name" width="100%" value="<?php echo $row['fullName'];?>"></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
</tr>

<tr>
<td>Username</td>
<td><input type="text" name="username" value="<?php echo $row['username'];?>"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="text" name="password" value="<?php echo $row['password'];?>"></td>
</tr>

<tr>
<td></td>
<td align="left"><button type="submit">Update User</button></td>
</tr>
</table>
</form>
</body>
</html>