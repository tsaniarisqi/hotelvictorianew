<?php 
include 'koneksi.php';
$id=$_GET['id_konfirmasi'];
$sql= mysqli_query($con,"select konfirmasi.*,transaksi.Tarif, konfirmasi.id_konfirmasi,konfirmasi.id_pelanggan,konfirmasi.bank,konfirmasi.gambar,konfirmasi.status from konfirmasi INNER JOIN transaksi ON transaksi.id_pelanggan=konfirmasi.id_pelanggan  where konfirmasi.id_konfirmasi='$id'");
$data=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
<?php include '../admin/template/headAdmin.php';?>
</head>
<?php include '../admin/template/headerAdmin.php';?>
<?php include '../admin/template/sidebarAdmin.php';?>

<body>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Data konfirmasi</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="tabeltamu.php" class="text-muted">Menu</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">konfirmasi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->
        
            <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
			 
				<tr style="color: black;">
                <td>ID KONFIRMASI</td>
                <td>:</td>
                <td><input type="text" name="id_konfirmasi" id="" value="<?php echo $data['id_konfirmasi']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Id_Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="id_pelanggan" id="" value="<?php echo $data['id_pelanggan']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>jumlah transfer</td>
                <td>:</td>
                <td><input type="text" name="jumlah_transfer" id="" value="<?php echo $data['Tarif']?>"></td>
				</tr>
            <tr style="color: black;">
                <td>Bank</td>
                <td>:</td>
                <td><input type="text" name="bank" id="" value="<?php echo $data['bank']?>"></td>
                </tr>
            <tr>
                <tr style="color: black;">
                <td>Status Pembayaran</td>
                <td>:</td>
                <td><input type="text" name="status" id="" value="<?php echo $data['status']?>"></td>
                </tr>
                <td></td>
                <td></td>
                <td> 
				<input type="submit" name="submit" id="" class="btn btn-success" value="SIMPAN">
                <input type="reset" name="reset" id="" class="btn btn-danger" value="RESET"> 
				
				</td>
            </tr>
        </form>
    </table>
          

    <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $id_konfirmasi = $_POST['id_konfirmasi'];
        $id_pelanggan = $_POST['id_pelanggan'];
        
        $bank = $_POST['bank'];
        $status= $_POST['status'];

        $q = mysqli_query($con, "UPDATE konfirmasi set id_pelanggan='$_POST[id_pelanggan]',
            
            bank='$_POST[bank]',
            status='$_POST[status]'
            where id_konfirmasi='$_POST[id_konfirmasi]'");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='konfirmasi.php?module=konfirmasi';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='konfirmasi.php?module=konfirmasi';</script>";
        }
    }

    ?>

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include '../admin/template/footerAdmin.php';?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>