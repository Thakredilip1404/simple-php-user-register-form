<html>
<head>
<title>HOME | USER</title>
<style>
li a{
	text-decoration:none;
	color:cyan;
}
ul{
	list-style-type:none;
}
li{
	//margin-left:150px;
	display:inline-block;
	padding:10px;
	border:2px solid black;
	width:100px;
	border-radius:20px;
}
#header{
	height:60px;
	background-color:gray;
	font-size:30px;
}
h1{
	color:red;
	}
	#header li:hover, a:hover{
		
		background-color:black;
		color:red;
	}
	#contact{
		right:10px;
		position:fixed;
	}
</style>
<body>
<h1 align="center">Infosite Of Peoples</h1>
<div id="header">
<ul>
<li><a href="register.php">Register</a></li>
<li><a href="view.php">View</a></li>
<li id="contact"><a href="contact.php">Contact</a></li>
</ul>
</div>
</body>
</html>