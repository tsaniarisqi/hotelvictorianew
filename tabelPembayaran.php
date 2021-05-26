<?php include 'koneksi.php'; ?>
<?php
//   if(@$_SESSION['username']!=""){
  if(!isset($_GET['konf'])){
?>
<?php include 'head.php';?>
<?php include 'header.php';?>
<div class="site-section site-section-sm">
	<div class="container">
		<div class="row">
			
			<div class="col-md-13 col-lg-9 mb-6">
				
				
				
				<form enctype="multipart/form-data" action="" method="post" class="p-5 bg-white">
					<table width="90%" border="1" class="table table-bordered table-striped">
						<tr>
						<th>No</th> 
						<th>Tanggal Pesan</th> 
						<th>No Faktur</th> 
						<th>Id Pelanggan</th> 
						<th>Nama</th> 
						<th>No Kamar</th>
						<th>Lama Menginap</th>
						<th>Total Biaya</th>
						<th>Aksi</th>
					</tr>
			<?php 
				include 'koneksi.php';
				$sql= mysqli_query($conn,"select transaksi.*,konfirmasi.status,transaksi.No_Faktur,transaksi.id_pelanggan,transaksi.nama,transaksi.No_Kamar,transaksi.lama_menginap,transaksi.Tarif from transaksi INNER JOIN konfirmasi ON konfirmasi.id_pelanggan=transaksi.id_pelanggan where transaksi.id_pelanggan='$_SESSION[id_pelanggan]' and konfirmasi.status='T'");
				$no=1;
				while($data=mysqli_fetch_array($sql)){
			?>
					<tr>
						<td align="center"><?php echo $no; ?></td>
						<td align="center"><?php $tanggal= date('d/M/Y'); echo " $tanggal";?></td>
						<td align="center"><?php echo $data['No_Faktur'] ?></td>
						<td align="center"><?php echo $data['id_pelanggan'] ?> </td>
						<td align="center"><?php echo $data['Nama'] ?> </td>
						<td align="center"><?php echo $data['No_Kamar'] ?> </td>
						<td align="center"><?php echo $data['lama_menginap'] ?> </td>
						<td align="center"><?php echo $data['Tarif'] ?> </td>
						<td align="center">
						<a  type="submit" href="konfirmasi_pembayaran.php?No_Faktur=<?php echo $data['No_Faktur'];?>" target="_blank" class="btn btn-success">Konfirmasi Pembayaran</a>
			</td>
			</tr>
			<?php
				$no++; 
				}
			?>
		</table>

<?php
}
?>
					
				</form>
			</div>
			<div class="col-lg-4">
				<div class="p-4 mb-3 bg-white">
					<h3 class="h5 text-black mb-3">Contact Info</h3>
					<p class="mb-0 font-weight-bold">Address</p>
					<p class="mb-4">Jalan Ciujung No.7, Kota Malang</p>
					<p class="mb-0 font-weight-bold">Telp</p>
					<p class="mb-4"><a href="#">(0341) 435 2686</a></p>
					<p class="mb-0 font-weight-bold">Phone</p>
					<p class="mb-0"><a href="#">0857 9144 6830</a></p>
				</div>
				
				
			</div>
		</div>
	</div>
</div>
