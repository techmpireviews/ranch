<!DOCTYPE html>
<html>
<head>
	<title>Bauman Red Angus</title>
	<link rel="icon" href="images/headlogo.png">
</head>
<header>
	<p id="menu"><span id="links"><a class="a1" href="index.php">Home </a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="a1" href="/cattle.php">Cattle </a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="a1" href="/horses.php">Horses </a>&nbsp;&nbsp;&nbsp; <a class="a1" href="/contact.php">Contact Us </a>&nbsp;&nbsp;&nbsp; <a class="a1" href="/about.php">About Us </a>&nbsp;&nbsp;&nbsp; <a class="a1" href="/search.php"> Search</a></span><img id="menulogo" src="images/whitemenu.png"></p>
</header>
<body>
	<center><b style="font-size: 60px; font-family: sans-serif;">Search</b></center>
	<div class="search">
		<span class="searchformspan">
			<form autocomplete="off" id="searchform" action="search.php" method="post">
				<img id="searchicon" style="width: 40px; height: auto;" src="images/searchicon.png">
				<input style="margin-left: 5px;" value="location" autocomplete="off" id="searchid" type="text" name="search">
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
		font-size: 22px;
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
echo "<center><p>Showing results for 'about us'</p><center>";
?>
	<br>
	<br>
	<center><a style="margin-left: -46px; font-size: 25px; color: blue;" href="/contact.php">Bauman Red Angus - Contact Us</a></center>
	<br>
	<center><a style="font-size: 20px; color: green;" href="/contact.php">https://www.baumanredangus.com/contact.php</a></center>
	<br>
  <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.8108511793675!2d-100.54779088502222!3d46.16390999450307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52d659c0778eac95%3A0xbe0b3176037f50c0!2s8th%20Ave%20SW%2C%20Linton%2C%20ND%2058552!5e1!3m2!1sen!2sus!4v1572151359114!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></center>
	
	
	
</body>
</html>
