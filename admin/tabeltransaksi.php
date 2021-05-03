<h2>Tabel Transaksi</h2>
<div class="alert alert-info">TABEL DATA TRANSAKSI</div>
<A href="index.php?module=inputtransaksi" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" class="table table-bordered table-striped">
<tr>
<form method="POST" action="">
<td>-Pilih Tanggal-</td><td><input type="date" name="hari_ini"></td>
<td><button type="submit" name="cari" style="background-color: red;">Cari</td>
</tr>
</form>

<tr> 
<th>No</th>
<th>No Faktur</th>
<th>No Kamar</th>
<th>ID Pelanggan</th>
<th>Tanggal Masuk</th>
<th>Tanggal Keluar</th>
<th>Lama Menginap</th>
<th>Tarif</th>
<th>Aksi</th>
</tr>


<?php  
include "koneksi.php";
 if (isset($_POST['cari'])){
  $hari_ini=$_POST['hari_ini'];
  $sql= mysqli_query($con, "select * from transaksi where transaksi.tgl_masuk='$hari_ini'");
  }else{
$sql = mysqli_query($con,"select * from transaksi");
}
$no=1;
$total=0;
while($row=mysqli_fetch_array($sql)){
$total=$row['lama_menginap'] * $row['Tarif'];
?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['No_Faktur'] ?> </td>
<td align="center"><?php echo $row['No_Kamar'] ?> </td>
<td align="center"><?php echo $row['id_pelanggan'] ?> </td>
<td align="center"><?php echo $row['tgl_masuk'] ?> </td>
<td align="center"><?php echo $row['tgl_keluar'] ?> </td>
<td align="center"><?php echo $row['lama_menginap'] ?> </td>
<td align="center"><?php echo $row['Tarif'] ?> </td>



<td align="center">
<a href="index.php?module=edittransaksi&No_Faktur=<?php echo $row['No_Faktur'];?>"class="btn btn-success">Edit</a>
<a href="index.php?module=hapustransaksi&No_Faktur=<?php echo $row['No_Faktur'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 
