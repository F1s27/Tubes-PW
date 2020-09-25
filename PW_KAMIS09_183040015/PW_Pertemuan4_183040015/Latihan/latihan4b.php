<?php 
$a = ["motherboard","processor","harddisk","pc coller", "vga card", "ssd"];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>tugas 4b</title>
 </head>
 <body>
 	<b>Macam-macam perangkat keras komputer</b>
 	<?php foreach ($a as $b ) : ?>
 		 <li><?= $b ?></li>
 	 

 <?php endforeach ?>

<?php $a[] = "card reader" ?>
<?php $a[] = "modem" ?>
<?php sort($a) ?>

<b>Macam-macam perangkat keras komputer</b>
 	<?php foreach ($a as $b ) : ?>
 		 <li><?= $b ?></li>
 	 

 <?php endforeach ?>


 
 </body>
 </html>