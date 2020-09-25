<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan 3b</title>
	<style type="text/css">
		.box{
			padding: 10px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php 
	$GLOBALS['issetGlobal'] = "Isset adalah = menyatakan variabel sudah diset atau tidak.jika variabel diset maka variabel akan  mengembalikan nilai true, sebaliknya akan bernailai false <br><br>";

	$GLOBALS['emptyGlobal'] = "empty adalah memeriksa apakah variabel form tidak dikirim atau tidak berisi data alias kosong";

		function soal($style){
			echo "<div class='$style'>".$GLOBALS['issetGlobal']. $GLOBALS['emptyGlobal']."</div>";
		}

		echo soal("box");
	?>


</body>
</html>