<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from kamar where No_Kamar='$_GET[No_Kamar]'");
  
  if($sqlb){
  	echo "Data Berhasil Dihapus";
	header("Location:index.php?module=tabelkamar");
  }else{
  	echo "Gagal Menghapus";
	header("Location:index.php?module=tabelkamar");
  }
?>