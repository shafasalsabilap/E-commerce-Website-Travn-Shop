<?php 
session_start();

$id_produk = $_GET['id_produk'];

if (isset($_SESSION['transaksi'][$id_produk]))
{
	$_SESSION['transaksi'][$id_produk]+=1;
}

else 
{
	$_SESSION['transaksi'][$id_produk]=1;
}

echo "<script>alert('Produk telah masuk ke transaksi anda');</script>";
echo "<script>location= 'pesanan_pembeli.php'</script>";

 ?>