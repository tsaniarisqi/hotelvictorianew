<?php 
session_start();
include "koneksi.php" ;
?>
<?php
  if(!isset($_GET['konf'])){
?>
<body onLoad="javascript:print()"> 
<style type="text/css">
.style5 {font-size: 24px}
</style>

<div class="panel-heading">
    <table width="100%">
	<tr>
	<td><div align="center">
	<h3><label>HOTEL VICTORIA</label></h3>
	<label>Jalan Ciujung No.7, Kota Malang, Jawa Timur</label>
	<br>
	<label>Telp : (0341) 435 2686    Phone : 0857 9144 6830</label> 
	
	<div align="center" style="margin-top: 20pt;"><h4 class="text-dark mb-1 w-100 text-truncate font-weight-medium">Cetak Pembayaran</h4>
</div>
	</td>
	</tr>
</table>
</div>

<table width="100%" border="1" class="table table-bordered table-striped" style="margin-top: -10pt;">

		<tr> 
		<th>No</th> 
		<th>ID Konfirmasi</th>
		<th>ID Pelanggan</th>
		<th>Bank</th>
		<th>Total Biaya</th>
		</tr>

<?php 
include 'koneksi.php';
$sql= mysqli_query($conn,"select konfirmasi.*,transaksi.Tarif,konfirmasi.id_konfirmasi,konfirmasi.id_pelanggan,konfirmasi.bank from konfirmasi INNER JOIN transaksi ON transaksi.id_pelanggan=konfirmasi.id_pelanggan where id_konfirmasi='$_GET[id_konfirmasi]'");
$no=1;
while($data=mysqli_fetch_array($sql)){

?>

		<tr>
			<td align="center"><?php echo $no; ?></td>
			<td align="center"><?php echo $data['id_konfirmasi'] ?> </td>
			<td align="center"><?php echo $data['id_pelanggan'] ?> </td>
			<td align="center"><?php echo $data['bank'] ?> </td>
			<td align="center"><?php echo $data['Tarif'] ?> </td>
		</tr>

<?php 
$no++;
}
?>
</table> 
 
 <td width="37%" bgcolor="#FFFFFF">
 <div align="right" style="margin-top: 20pt;"> <?php $tanggal= date('d M Y');
 echo " $tanggal";?><br/>
 Pemilik
 <br></br>
 <br></br>
 <?php echo $_SESSION['nama']; ?>
 </br>
 </td>
 </tr>
 </div>
 <?php
 }
 ?>

