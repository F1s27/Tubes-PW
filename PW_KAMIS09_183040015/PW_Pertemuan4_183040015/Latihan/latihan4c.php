<?php 
$a = [
	"motherboard" => "papan sirkuit komponen komputer",
	"processor" => "sebuah ic yang mengontrol seluruh",
	"harddisk" => "media penyimpan sekunder",
	"pc coller" => "mengurangi panas yang dihasilkan oleh komputer",
	"vga card" => "mengolah data grafik yang akan ditampilkan oleh monitor",
	"optical drive" => "membaca, maupun menulis data dari kepingan cd",
	"card reader" => "untuk membaca data-data yang tersimpan didalam memory card",
	"modem" => "mengubah sinyal digital menjadi sinyal analog"
];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>tugas 4c</title>
 </head>
 <body>
 	
 	<table>

<b>Macam-macam perangkat keras komputer</b>
 	<?php foreach ($a as $b => $c ) : ?>
 		<tr>
 		 <td><?= $b ?></td>
 		 <td>:</td>
 		 <td><?= $c ?></td>
 		</tr>

 <?php endforeach ?>

</table>
 
 </body>
 </html>