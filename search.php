<!DOCTYPE html>
<html>
<head>
	<title>Bauman Red Angus</title>
	<link rel="icon" href="images/headlogo.png">
</head>
<header>
	<p id="menu"><span id="links"><a class="a1" href="/index.php">Home </a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="a1" href="/cattle.php">Cattle </a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="a1" href="/horses.php">Horses </a>&nbsp;&nbsp;&nbsp; <a class="a1" href="/contact.php">Contact Us </a>&nbsp;&nbsp;&nbsp; <a class="a1" href="/about.php">About Us </a>&nbsp;&nbsp;&nbsp; <a class="a1" href="/search.php"> Search</a></span><img id="menulogo" src="images/whitemenu.png"></p>
</header>
<body>
	<center><b style="font-size: 60px; font-family: sans-serif;">Search</b></center>
	<div class="search">
		<span class="searchformspan">
			<form autocomplete="off" id="searchform" action="search.php" method="post">
				<img id="searchicon" style="width: 40px; height: auto;" src="images/searchicon.png">
				<input style="margin-left: 5px;" placeholder="search" autocomplete="off" id="searchid" type="text" name="search">
			</form>
		</span>
	</div>












<style type="text/css">
	body {
		background-image: linear-gradient(to right, #B7E2F9, #ffffff);
		margin-top: 7%;
	}
	input:focus {
		outline: none;
	}

	#searchform {
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 8px;
	}

	#searchid {
		margin-top: -5px;
		border: solid;
		background-color: transparent;
		border-color: transparent;
		border-bottom-color: #000000;
		border-width: 1px;
		width: 400px;
		height: 25px;
	}
	#menu {
	position: absolute;
	top: -18px;
	left: -1px;
	right: 0px;
	background-color: #000000;
	border: solid;
	border-color: #000000;
    clip-path: circle(50px at 15px 14px);
	padding: 35px;
	transition: 0.5s;
	z-index: 50;
}

#menu:hover {
	position: absolute;
	top: -18px;
	left: -1px;
	right: 0px;
	border: solid;
	border-color: #ffffff;
	border-bottom-color: #000000;
    clip-path: circle(100%);
	background-color: #ffffff;
	padding: 33px;
	transition: 0.85s;
	z-index: 50;
}
.a1 {
	padding: 2px 7px;
	text-decoration: none;
	color: #000000;
	border: solid;
	border-color: transparent;
	background-color: transparent;
	border-radius: 7px;
	font-size: 25px;
	transition: 0.5s;
}

.a1:hover {
	padding: 2px 7px;
	text-decoration: none;
	color: #ffffff;
	border: solid;
	border-color: #000000;
	background-color: #000000;
	border-radius: 15px;
	font-size: 25px;
	transition: 0.6s;
}

#links {
	position: absolute;
	margin-left: 48.5%;
	margin-right: -50%;
	transform: translate(-50%, -50%);
}

#menulogo {
	width: 30px;
	height: auto;
	position: absolute;
	top: 16px;
	left: 12px;
}
</style>




<?php
$result= $_POST['search'];
$result= strtolower($result);
if ($result=="cattle")
header ('Location: /searchcattle.php');
	
if ($result=="home")
header ('Location: /searchhome.php');
	
if ($result=="location")
header ('Location: /searchlocation.php');
	
if ($result=="horses")
header ('Location: /searchhorses.php');
	
if ($result=="about us")
header ('Location: /searchabout.php');
	
if ($result=="about")
echo "<p>Did you mean</p><a href='/searchabout.php'>About Us</a><p>?</p>";
	
if ($result=="contact")
echo "<p>Did you mean</p><a href='/searchcontact.php'>About Us</a><p>?</p>";
	
if ($result=="contact us")
header ('Location: /searchcontact.php');

echo "<center>No results for '$result'.</center>";
?>
</body>
</html>

