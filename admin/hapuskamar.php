<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from kamar where No_Kamar='$_GET[No_Kamar]'");
  
  if($sqlb){
  	echo "Data Berhasil Dihapus";
	window.location.href'index.php?module=tabelkamar';
  }else{
  	echo "Gagal Menghapus";
	window.location.href'index.php?module=tabelkamar';
  }
?>