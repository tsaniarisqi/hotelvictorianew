<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from tamu where No_Id='$_GET[No_Id]'");
  
  if($sqlb){
  	echo "Data Berhasil Dihapus";
	window.location.href='index.php?module=tabeltamu';
  }else{
  	echo "Gagal Menghapus";
	window.location.href='index.php?module=tabeltamu';
  }
?>