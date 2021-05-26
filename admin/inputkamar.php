<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<?php include '../admin/template/headAdmin.php';?>
</head>
<?php include '../admin/template/headerAdmin.php';?>
<?php include '../admin/template/sidebarAdmin.php';?>

<body>
    
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Data Kamar</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="tabelCustomer.php" class="text-muted">Menu</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Kamar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Masukkan Data-Data Berikut</h4>
                                <form action="inputKamar.php" method="POST">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-md-2">No.Kamar</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" name = "No_Kamar" placeholder="Masukkan No Kamar">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Nama Kamar</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name = "Jenis" placeholder="Masukkan Nama Kamar">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Tipe Bed</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name = "Type" placeholder="Masukkan Tipe Bed">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Tarif</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" name = "Tarif" placeholder="Masukkan Tarif">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Deskripsi</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <textarea name="deskripsi" id="deskripsi" class="form-control " cols="30" rows="8" placeholder="Masukkan Deskripsi Kamar "></textarea>
                                                        </div>
                                                    </div>
                                            </div>                                            
                                        </div>
                                        <div class="text-right">
                                            <input type="submit" name = "submit" class="btn btn-info" value = "SIMPAN">
                                            <input type="reset" name = "reset" class="btn btn-dark" value = "RESET">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
            <?php include '../Admin/template/footerAdmin.php';?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    
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

    <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $No_Kamar = $_POST['No_Kamar'];
        $Jenis = $_POST['Jenis'];
        $Type= $_POST['Type'];
        $Tarif= $_POST['Tarif'];
        $deskripsi = $_POST['deskripsi'];

        $q = mysqli_query($con, "INSERT INTO Kamar(No_Kamar,Jenis,Type,Tarif,deskripsi) VALUES('$No_Kamar','$Jenis','$Type','$Tarif','$deskripsi')");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='tabelkamar.php';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='tabelkamar.php';</script>";
        }
    }

    ?>
</body>

</html>