<?php 
include 'koneksi.php';
$id=$_GET['No_Kamar'];
$sql= mysqli_query($con,"select * from kamar where No_Kamar='$id'");
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Data Kamar</h4>
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
                <td>No.Kamar</td>
                <td> <input type="text" name="No_Kamar" id="" value="<?php echo $data['No_Kamar']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Nama Kamar</td>
                <td> <input type="text" name="Jenis" id="" value="<?php echo $data['Jenis']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Tipe Bed</td>
                <td> <input type="text" name="Type" id="" value="<?php echo $data['Type']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Tarif</td>
                <td> <input type="text" name="Tarif" id="" value="<?php echo $data['Tarif']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Deskripsi</td>
                <td> <input type="text" name="deskripsi" id="" value="<?php echo $data['deskripsi']?>"> </td>
                <!-- <td> <textarea name="deskripsi" id="" class="form-control " cols="30" rows="8"  value="<?php echo $data['deskripsi']?>"></textarea> </td> -->
            </tr>            
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
        $No_Kamar = $_POST['No_Kamar'];
        $Jenis = $_POST['Jenis'];
        $Type= $_POST['Type'];
        $Tarif= $_POST['Tarif'];
        $deskripsi = $_POST['deskripsi'];

        $q = mysqli_query($con, "UPDATE kamar SET No_Kamar='$_POST[No_Kamar]',Jenis='$_POST[Jenis]',Type='$_POST[Type]',Tarif='$_POST[Tarif]',deskripsi='$_POST[deskripsi]' where No_Kamar='$_POST[No_Kamar]'");
	
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='tabelkamar.php?module=tabelkamar';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='tabelkamar.php?module=tabelkamar';</script>";
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