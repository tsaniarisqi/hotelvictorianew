<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from pelanggan where id_pelanggan='$_GET[id_pelanggan]'");
  
  if($sqlb){
  	echo "Data Berhasil Dihapus";
    header("Location:tabeltamu.php?module=tabeltamu");
  }else{
  	echo "Gagal Menghapus";
    header("Location:tabeltamu.php?module=tabeltamu");
  }
?>