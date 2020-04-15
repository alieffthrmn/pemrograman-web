<?php 
	
	// Mengecek apakah ada id yang dikirimkan
	// jika tidak ada maka akan dikembalikan ke index.php
	if (!isset($_GET['id'])) {
		header("location: ../index.php");
	}

	require 'functions.php';

	// Mengambil id dari url
	$id = $_GET['id'];

	// Melakukan query dengan parameter id yang diambil dari url
	$buku = query("SELECT * FROM buku WHERE id = $id")[0];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<div class="container">
 		<div class="display">
 			<img src="../assets/img/<?= $bk['display'] ?>" alt="">
 		</div>
 		<div class="keterangan">
 			<p><?= $bk['judul'] ?></p>
 			<p><?= $bk["pengarang"] ?></p>
 			<p><?= $bk["penerbit"] ?></p>
 			<p><?= $bk["harga"] ?></p>
 		</div>

 		<button class="back"><a href="../index.php">Kembali</a></button>
 	</div>
 </body>
 </html>

