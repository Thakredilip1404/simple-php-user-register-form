<html>
<head>
<title>DIPSLAY USERS</title>
<style>
#content{
	width:50%;
	margin:auto;
}
#display{
	padding-top:30px;
font-size:15px;	
text-align:center;
}
table{
//	background-color:cyan;
	width:600px;
border-color:none;
border-radius:15px;
}
table tr{
	height:30px;
}
table th{
	font-size:20px;
	}
	caption{
		font-size:20px;
		font-weight:bolder;
	}
	#display a{
		color:red;
		text-decoration:none;
		
	}
	#display a:hover{
		font-size:20px;
		background-color:black;
		color:cyan;
	}
</style>
</head>
<body>
<?php include "header.php"; 
require_once "dbconn.php";
$query="select user_id,name,email,mob from users";
$rs=mysql_query($query);
$count=mysql_num_rows($rs);
?>
<div id="content">
<div id="display">
<table border=1 cellpadding=5 cellspacing=5>
<caption>Users Information</caption>
<tr><th>Sr No</th><th>Name</th><th>Email</th><th>Mobile</th><th>Operation</th></tr>
<?php if($count>0)
{
	$i=1;
	while($row=mysql_fetch_assoc($rs))
	{
		?>
<tr>

<td><?php echo $i; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mob']; ?></td>
<td><a href="delete.php?id=<?php echo $row['user_id'];?>">Delete</a>&nbsp;&nbsp;&nbsp;<a href="update.php?id=<?php echo $row['user_id'];?>">Update</a></td>
</tr>
<?php 
	$i++;
	}
}
?>

<table>
</div>
</div>
</body>
</html>