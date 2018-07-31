<?php
	header("Content-type:text/html;charset=utf-8");
	$arr = array();
	$arr[0] = 0;
	$arr[1] = 1;
	for($i=2;$i<30;$i++){
		$arr[$i] = $arr[$i-1]+$arr[$i-2];
		//echo $arr[$i]+",";
	}
	if($_POST['submit']=="Submit"){
		session_start();
		$n = $_POST['feibo'];
		$_SESSION['n'] = $n;
		$file_name = "fibonacci".$n.".txt";
		$myfile = fopen($file_name, "w") or die("Unable to open file!");
		$txt = "";
		for($i=1;$i<=$n;$i++){
				$txt = $txt.$arr[$i];
				if($i!=$n) $txt.=" ";	
		}
		echo $txt;
		fwrite($myfile, $txt."\n");
		fclose($myfile);
	}

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
		A:<input type="text" name="A" id="A"><br>
		B:<input type="text" name="B" id="B">
		<p></p>
		C:<input type="text" name="C" id="C">
		<p></p>
		<input type="submit" name="submit" id="submit" value="jisuan">
	</form>
	<?php
		if($_POST['submit']=="jisuan"){
			 session_start();
			 $nn = $_SESSION['n'];
			 $sum = 0;
			 for($i=1;$i<=$nn;$i++){
			 	$sum+=$arr[$i];
			 }
			 $A = $_POST['A'];
			 $B = $_POST['B'];
			 $C = $_POST['C'];

			 $ABC = ($A+$B)*$C;
			 $total = $ABC+$sum;
			 $ave = ($A+$B+$C+$sum)/($nn+3);

			 //echo $nn." ".$sum." ".$A." ".$B." ".$C." ".$ABC;

			 echo 'Total Sum:'.$total;
			 echo "<br>";
			 echo 'Average:'.round($ave,2);
		}
	?>
</body>
</html>