<!DOCTYPE html>
<html>
<head>
	<title>Tugas php</title>
</head>
<body>

<p>Mencari Nilai Terbesar</p>

<form action="" method="POST">
	<table >
		<tr>
			<td>Variabel a</td>
			<td>:</td>
			<td><input type="text" name="vara" value="<?php echo @$_POST['vara'];?>"></td>	
		</tr>		

		<tr>
			<td>Variabel b</td>
			<td>:</td>
			<td><input type="text" name="varb" value="<?php echo @$_POST['varb'];?>"></td>	
		</tr>

		<tr>
			<td>Variabel c</td>
			<td>:</td>
			<td><input type="text" name="varc" value="<?php echo @$_POST['varc'];?>"></td>	
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="cek" value="Terbesar"></td>

		</tr>

	</table>
</form>
<br>
<?php 

	$v1 = "Variabel a";
	$v2 = "Variabel b";
	$v3 = "Variabel c";

	if(!empty($_POST['vara'])){
	$a = $_POST['vara'];
	echo "$v1 = $a <br>";
	}

	if(!empty($_POST['varb'])){
	$b = $_POST['varb'];
	echo "$v2 = $b <br>";
	}

	if(!empty($_POST['varc'])){
	$c = $_POST['varc'];
	echo "$v3 = $c <br> <br>";
	}

 function terbesar($a, $b, $c)
{

 $max = $a; 
 if ($b> $max) { 
  $max = $b;
 } 
 elseif ($c > $max) { 
  $max = $c;
 } 

 	if ($a == max($a,$b,$c)){
  		echo "Variabel dengan nilai terbesar = variabel A";
	}elseif ($b == max($a,$b,$c)){
  		echo "Variabel dengan nilai terbesar = variable B";
	}elseif ($c == max($a,$b,$c)){
  		echo "Variabel dengan nilai terbesar = variable C";
	}
}

 if(!empty($_POST['varc']) && !empty($_POST['varb']) && !empty($_POST['vara'])) {

	terbesar($a, $b, $c);
 }

?>
</body>
</html>