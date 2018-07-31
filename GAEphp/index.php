<?php
	ini_set("error_reporting","E_ALL & ~E_NOTICE");
	header("Content-type:text/html;charset=utf-8");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>	
	<form name="form1" method="post" action="2.php">
		N:<input type="text" name="feibo" id="feibo" style="width:90px">
		<p></p>
		<input type="submit" name="submit" id="submit" value="Submit"  >
	</form>
</body>
</html>