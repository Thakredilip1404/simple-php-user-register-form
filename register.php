<html>
<head>
<title>REGISTER</title>
<style>
.form{
	
	padding-top:0px;
	width:40%;
	margin:auto;
//	border:1px solid black;
	
}

#form-control{
	
	width:100%;
	border:2px solid black;
	padding-left:50px;
	padding-top:20px;
	font-size:18px;
	border-radius:20px;
}
input[type="text"]
{
	width:50%;
	margin:10px;
	text-align:justify;
}
input[type="submit"],input[type="reset"]
{
	width:120px;
	height:35px;
	font-size:18px;
	margin-left:100px;
	padding-left:20px;
	border-radius:20px;
	margin-bottom:10px;
}
</style>
</head>
<body>
<?php include "header.php";  ?>
<div class="form">
<h2 align=center>User Registration</h2>
<div id="form-control">
<form method="post" action="">
Name:<input type="text" name="name" ><br><br>
Email:<input type="text" name="email" ><br><br>
Mobile:<input type="text" name="mob" ><br><br>
Password:<input type="text" name="pass" ><br><br>
<input type="submit" name="reg" value="Register" >
<input type="reset" value="Reset">
</form>
</div>
</div>
</body>
</html>
<?php
extract($_POST);
if(isset($reg))
{
require_once "dbconn.php";
require_once "format.php";
$name=format($name);
$email=format($email);
$mob=format($mob);
$pass=format($pass);
$query="insert into users (name,email,mob,pass) values ('$name','$email','$mob','$pass')";
if(!empty($name) && !empty($email) && !empty($mob) && !empty($pass))
{
$rs=mysql_query($query);
if($rs)
header('location:view.php');
else
	echo mysql_error($con);
}
else
	echo "Insert All Fields";
}
else{
	//echo "Enter data first";
}
?>

