<?php include 'koneksi.php'; 
$id=$_GET['id_pelanggan'];
$sql= mysqli_query($con,"select * from tamu where id_pelanggan='$id'");
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Data Customer</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="tabeltamu.php" class="text-muted">Menu</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Customer</li>
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
                <td>ID Tamu</td>
                <td> <input type="text" name="id_pelanggan" id="" value="<?php echo $data['id_pelanggan']?>"> </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama</td>
                <td><input type="text" name="Nama" id="" value="<?php echo $data['Nama']?>"></td>
				</tr>
            <tr style="color: black;">
                <td>Alamat</td>
                <td> <input type="text" name="Alamat" id="" value="<?php echo $data['Alamat']?>""></textarea> </td>
            </tr>
			<tr style="color: black;">
                <td>Asal</td>
                <td><input type="text" name="Asal" id="" value="<?php echo $data['Asal']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>No Telpon</td>
                <td> <input type="text" name="NoTlp" id="" value="<?php echo $data['NoTlp']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Jenis Kelamin</td>
                <td><select name="jk" id="jk" > 
				<option value="">--Pilih--</option>
				<option value="Laki Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</tr>
            <tr>
                <td></td>
                <td> 
				<input type="submit" name="submit" id="" class="btn btn-success" value="Simpan">
                <input type="reset" name="reset" id="" class="btn btn-danger" value="Reset"> 
				
				</td>
            </tr>
        </form>
    </table>

    <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $id_pelanggan = $_POST['id_pelanggan'];
        $Nama = $_POST['Nama'];
        $Alamat= $_POST['Alamat'];
        $Asal= $_POST['Asal'];
        $NoTlp= $_POST['NoTlp'];
        $jk = $_POST['jk'];

        $q = mysqli_query($con, "UPDATE tamu set id_pelanggan='$_POST[id_pelanggan]',Nama='$_POST[Nama]',Alamat='$_POST[Alamat]',Asal='$_POST[Asal]',NoTlp='$_POST[NoTlp]',jk='$_POST[jk]' where id_pelanggan='$_POST[id_pelanggan]'");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='tabeltamu.php?module=tabeltamu';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='tabeltamu.php?module=tabeltamu';</script>";
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