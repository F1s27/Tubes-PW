<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Latihan 3a </title>
	<style type="text/css">
		.ganti_style{
			font-size: 28px;
			font-family: arial;
			color: #8c782d;
			font-style: italic;
			font-weight: bolder;
		}

		.box_model{
			border-radius: 5px;
			margin: 20px 0 0 20px;
			border:1px solid black;
			padding: 10px;
			width: 600px;
			box-shadow: 1px 1px 15px rgba(0,0,0,0.5);
		}

	</style>
</head>
<body>

	<?php 
		function gantiStyle($tulisan, $style1, $style2){
				echo"<div class='$style1 $style2'>$tulisan</div>";

				

		}
			echo gantiStyle("Selamat datang di praktikum PW 2019","ganti_style","box_model");

	 ?>



</body>
</html>