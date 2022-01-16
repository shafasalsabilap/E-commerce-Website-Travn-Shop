<?php 
include('koneksi.php');

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$ukuran_produk = $_POST['ukuran_produk'];
$stok_produk = $_POST['stok_produk'];
$harga_produk = $_POST['harga_produk'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder.$nama_file);
$edit = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', ukuran_produk='$ukuran_produk', stok_produk='$stok_produk', harga_produk='$harga_produk', gambar='$nama_file' WHERE id_produk='$id_produk' ");

if($edit)
	header('location: daftar_produk.php');
else
	echo "Edit Menu Gagal";


 ?>