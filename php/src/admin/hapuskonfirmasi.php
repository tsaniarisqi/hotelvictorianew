<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from konfirmasi where id_konfirmasi='$_GET[id_konfirmasi]'");
  
  if($sqlb){
  	echo "Data Berhasil Dihapus";
	header("Location:konfirmasi.php?module=konfirmasi");
  }else{
  	echo "Gagal Menghapus";
	header("Loation:konfirmasi.php?module=konfirmasi");
  }
?>