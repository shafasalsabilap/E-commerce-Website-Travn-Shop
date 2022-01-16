<?php 

include('koneksi.php');

$id_produk = $_GET['id_produk'];

$hapus= mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");

if($hapus)
	header('location: daftar_produk.php');
else
	echo "Hapus data gagal";

 ?>