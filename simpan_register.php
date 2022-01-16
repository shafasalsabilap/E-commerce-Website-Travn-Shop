<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username_pembeli=$_POST["username_pembeli"];
$pin_pembeli=$_POST["pin_pembeli"]; //untuk password digunakan enskripsi md5
$nama_pembeli=$_POST["nama_pembeli"];



//Menginput data ke tabel
  $hasil=mysqli_query($koneksi, "INSERT INTO pembeli (username_pembeli,pin_pembeli,nama_pembeli) VALUES('$username_pembeli','$pin_pembeli','$nama_pembeli')");

//Kondisi apakah berhasil atau tidak
  if ($hasil) 
  {
	echo "<script>
				alert('Anda Berhasil Registrasi !');
				document.location='formlogin.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='register.php';
		  </script>";
  }

?>