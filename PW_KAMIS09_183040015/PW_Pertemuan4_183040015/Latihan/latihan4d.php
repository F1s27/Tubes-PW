<?php 
$hardware= [
[
	"perangkat" => "Motherboard",
	"fungsi" => "Papan sirkuit komponen komputer",
	"hargaBaru" => 500000,
	"hargaSekon" => 200000
],
[
	"perangkat" => "Processor",
	"fungsi" => "Sebuah IC yang mengontrol seluruh jalanya sistem komputer",
	"hargaBaru" => 300000,
	"hargaSekon" => 200000
],
[
	"perangkat" => "Hard Disk",
	"fungsi" => "Media penyimpanan sekunder",
	"hargaBaru" => 800000,
	"hargaSekon" => 500000
],
[
	"perangkat" => "PC Coller",
	"fungsi" => "Mengurangi panas yang dihasilkan oleh komputer",
	"hargaBaru" => 200000,
	"hargaSekon" => 100000
],
[
	"perangkat" => "VGA Card",
	"fungsi" => "Mengolah data grafik yang akan ditampilkan oleh monitor",
	"hargaBaru" => 900000,
	"hargaSekon" => 800000
],
[
	"perangkat" => "Optical Drive",
	"fungsi" => "Membaca, maupun menulis data dari kepingan CD",
	"hargaBaru" => 500000,
	"hargaSekon" => 300000
],
[
	"perangkat" => "Card Reader",
	"fungsi" => "Untuk membaca data-data yang tersimpan didalam memory card",
	"hargaBaru" => 10000,
	"hargaSekon" => 5000
],
[
	"perangkat" => "Modem",
	"fungsi" => "Mengubah sinyal digital menjadi sinyal analog",
	"hargaBaru" => 200000,
	"hargaSekon" => 150000
]
	]
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 4D</title>
 </head>
 <body>
 	<table border="1" cellpadding="3" cellspacing="8">
 		<tr>
 			<th>No</th>
 			<th>Perangkat</th>
 			<th>Fungsi</th>
 			<th>Harga Baru</th>
 			<th>Harga Sekon</th>
 		</tr>
 		<?php $i=1; ?>
 		<?php foreach ($hardware as $h) : ?>
 			<tr>
 				<td style="text-align:center;"><?= $i; ?></td>
 				<td><?= $h["perangkat"]; ?></td>
 				<td><?= $h["fungsi"]; ?></td>
 				<td><?= $h["hargaBaru"]; ?></td>
 				<td><?= $h["hargaSekon"]; ?></td>
 			</tr>
 			<?php 
 			$i++;
 			$totalBaru += $h["hargaBaru"];
 			$totalSekon += $h["hargaSekon"];
 			 ?>
 			<?php endforeach; ?>

 			<tr>
 				<td style="text-align: center;"><b>#</b></td>
 				<td colspan="2" style="text-align: center;"><b>Jumlah</b></td>

 				<td>Rp <?= $totalBaru ?></td>
 				<td>Rp <?= $totalSekon ?></td>

 			</tr>
 	</table>
 </body>
 </html>