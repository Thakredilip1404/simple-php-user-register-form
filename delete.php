<?php
$uid=$_GET['id'];
require_once "dbconn.php";
$query="delete from users where user_id='$uid'";
$rs=mysql_query($query);
if($rs)
header('location:view.php');
else
	echo mysql_error($con);


?>