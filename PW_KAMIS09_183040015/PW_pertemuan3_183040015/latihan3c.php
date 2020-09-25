<?php 
	$GLOBALS['phiGlobal'] = 3.14;
	echo "<h4>Menghitung Luas Lingkaran</h4>";
	function hitungLuasLingkaran($r){
		$Luas= $GLOBALS['phiGlobal']*pow($r, 2);
		echo "Jari-jari = $r cm";
		echo "<br>";
		echo "Luas lingkaran = ". $Luas ."cm<sup>2</sup>";
	}
	hitungLuasLingkaran(10);
	echo "<hr>";

	
	echo "<hr>";

	echo "<h4>Menghitung Keliling Lingkaran</h4>";
	function hitungKelilingLingkaran($r){
		$Keliling= 2*$GLOBALS['phiGlobal']*$r;
		echo "Jari-jari = 20cm";
		echo "<br>";
		echo "Keliling lingkaran = ". $Keliling ."cm";
		echo "<hr>";
	}

	hitungKelilingLingkaran(20)

	


 ?>