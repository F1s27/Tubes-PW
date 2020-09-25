<?php 
$barang= [
[
	"foto" => "1.jpg",
	"namaBarang" => "Play station 1",
	"perusahaan" => " Sony Interactive Entertainment ",
	"tanggalLiris" =>" 3 Desember 1994",
	"terjual" => "102,4 juta unit"
],
[
	"foto" => "2.jpg",
	"namaBarang" => "Play station 2",
	"perusahaan" => " Sony Interactive Entertainment ",
	"tanggalLiris" => " 26 Oktober 2000",
	"terjual" => "138 juta unit"
],
[
	"foto" => "3.jpg",
	"namaBarang" => "Play station 3",
	"perusahaan" => " Sony Interactive Entertainment ",
	"tanggalLiris" => " 26 Oktober 2000",
	"terjual" => "83,8 juta unit"
],
[
	"foto" => "4.jpg",
	"namaBarang" => "Play station 4",
	"perusahaan" => " Sony Interactive Entertainment ",
	"tanggalLiris" => "9 Januari 2014",
	"terjual" => "63.3 juta unit"
],
[
	"foto" => "5.jpg",
	"namaBarang" => "Play station portable",
	"perusahaan" => " Sony Interactive Entertainment ",
	"tanggalLiris" => " 11 Mei 2003",
	"terjual" => "82 juta unit"
],
[
	"foto" => "6.jpg",
	"namaBarang" => "Xbox 360",
	"perusahaan" => "Microsoft",
	"tanggalLiris" => "‎15 November 2001",
	"terjual" => "84 juta unit"
],
[
	"foto" => "7.jpg",
	"namaBarang" => "Xbox one",
	"perusahaan" => "Microsoft",
	"tanggalLiris" => "‎22 November 2013",
	"terjual" => "26 juta unit"
],
[
	"foto" => "8.jpg",
	"namaBarang" => "Nintendo Switch",
	"perusahaan" => " Nintendo ",
	"tanggalLiris" => "3 Maret 2017",
	"terjual" => "49,1 juta unit"
],
[
	"foto" => "9.jpg",
	"namaBarang" => "Nintendo Wii",
	"perusahaan" => "Nintendo",
	"tanggalLiris" => "16 September 2005",
	"terjual" => "101.6 juta unit"
],
[ 
	"foto" => "10.jpg",
	"namaBarang" => "Nintendo DS ",
	"perusahaan" => "Nintendo",
	"tanggalLiris" => "21 November 2004",
	"terjual" => "154 juta unit"
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
 			<th>Foto</th>
 			<th>Nama Barang</th>
 			<th>Perusahaab</th>
 			<th>Tanggal Liris</th>
 			<th>Terjual</th>
 		</tr>
 		<?php $i=1; ?>
 		<?php foreach ($barang as $b) : ?>
 			<tr>
 				<td style="text-align:center;"><?= $i; ?></td>
 				<td><img src="asset/<?= $b['foto'];?>"</td>
 				<td><?= $b["namaBarang"]; ?></td>
 				<td><?= $b["perusahaan"]; ?></td>
 				<td><?= $b["tanggalLiris"]; ?></td>
 				<td><?= $b["terjual"]; ?></td>
 			</tr>
 			<?php $i++; ?>
 			<?php endforeach; ?>


 			</tr>
 	</table>
 </body>
 </html>