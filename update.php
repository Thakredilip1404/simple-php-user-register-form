<html>
<head><title>Update</title>
<style>
#form-control{
	margin-left:500px;
	border:2px solid black;
	padding-left:50px;
	padding-top:20px;
	font-size:18px;
	border-radius:20px;
	width:400px;
}
input[type="submit"],input[type="reset"]
{
	width:100px;
	height:30px;
	font-size:18px;
	//margin-left:100px;
	padding-left:20px;
	border-radius:20px;
	margin-bottom:10px;
}

input[type="text"]
{
	width:50%;
	margin:10px;
	text-align:justify;
}

</style>
</head>
<body>
<?php
require_once "dbconn.php";
include "header.php";
$uid=$_GET['id'];
extract($_POST);
if(isset($update))
{
	$update="update users set name='$name',email='$email',mob='$mob',pass='$pass' where user_id='$uid'";
	if(!empty($name) && !empty($email) && !empty($mob) && !empty($pass))
{
	$res=mysql_query($update);
	if($res)
	{
		header('location:view.php');
	}
	else
	{
		echo "Not Updated";
	}
}
else echo "<h2 align=center>Insert ALL fields</h2>";
}
$query="select name,email,mob,pass from users where user_id='$uid'";
$rs=mysql_query($query);
$row=mysql_fetch_assoc($rs);

?>
<h2 align=center>Update User</h2>
<div id="form-control">
<form method="post" action="">
Name:<input type="text" name="name" value="<?php echo $row['name']; ?>" /><br><br>
Email:<input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
Mobile:<input type="text" name="mob"  value="<?php echo $row['mob']; ?>"><br><br>
Password:<input type="text" name="pass" value="<?php echo $row['pass']; ?>"><br><br>
<input type="submit" name="update" value="Update" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Reset">
</form>
</div>
</body>
</html>