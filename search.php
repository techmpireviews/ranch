<!DOCTYPE html>
<html>
<head>
	<title>Bauman Red Angus</title>
	<link rel="icon" href="images/headlogo.png">
</head>
<body>
<center><h1 style="font-size: 40px;">There are no results found for this search.<br><a style="text-decoration: none; position: relative; margin-left: -75px;" href="/index.php"><img style="width: 30px; height: auto;  margin-top: -5px; transform: rotate(180deg);"src="images/back.png"><b id="back" style="color: blue; position: absolute; margin-top: -1.5px; margin-left: 5px;"> Back</b></a></h1><br><br><br><br><br><br></center>
<?php
$result= $_POST['search'];
$result= strtolower($result);
if ($result=="cattle")
header ('Location: /search=cattle.php');
	
if ($result=="horses")
header ('Location: /search=horses.php');
	
if ($result=="about us")
header ('Location: /search=about.php');
	
if ($result=="contact us")
header ('Location: /search=contact.php');
	
	if ($result=="home")
header ('Location: /search=home.php');
?>
</body>
</html>
