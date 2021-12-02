<!DOCTYPE html>
<html lang="zxx">
<head>
<?php include '../admin/template/headAdmin.php';?>
</head>
<?php include '../admin/template/headerAdmin.php';?>
<?php include '../admin/template/sidebarAdmin.php';?>

<body>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tabel Data Konfirmasi</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="indexAdmin.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Konfirmasi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <!-- <div class="customize-input float-right">
                            <A href="inputKamar.php" class="btn btn-primary">Tambah Data</a>
                        </div> -->
                    </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Konfirmasi</h4>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered wrap">
                                    <thead>
                                        <tr> 
                                        <th>No</th>
                                        <th>Id_Konfirmasi</th>
                                        <th>Id_Pelanggan</th>
                                        <th>Jumlah Transfer</th>
                                        <th>Bank</th>
                                        <th>Bukti Bayar</th>
                                        <th>status Pembayaran</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php  
                                        include "koneksi.php";
                                        $sql = mysqli_query($con,"select konfirmasi.*,transaksi.Tarif, konfirmasi.id_konfirmasi,konfirmasi.id_pelanggan,konfirmasi.bank,konfirmasi.gambar,konfirmasi.status from konfirmasi INNER JOIN transaksi ON transaksi.id_pelanggan=konfirmasi.id_pelanggan order by id_konfirmasi DESC");
                                        $no=1;
                                        $total=0;
                                        while($row=mysqli_fetch_array($sql)){
                                        ?>
                                            <tr>
                                            <td align="center"><?php echo $no; ?></td>
                                            <td align="center"><?php echo $row['id_konfirmasi'] ?> </td>
                                            <td align="center"><?php echo $row['id_pelanggan'] ?> </td>
                                            <td align="center"><?php echo $row['Tarif'] ?> </td>
                                            <td align="center"><?php echo $row['bank'] ?> </td>
                                            <td align="center"><?php echo $row['gambar'] ?> </td>
                                            <td align="center"><?php echo $row['status'] ?> </td>

                                            <td align="center">
                                            <a href="editkonfirmasi.php?module=editkonfirmasi.php&id_konfirmasi=<?php echo $row['id_konfirmasi'];?>"class="btn btn-success">konfirmasi</a>
                                            <a href="hapuskonfirmasi.php?module=hapuskonfirmasi.php&id_konfirmasi=<?php echo $row['id_konfirmasi'];?>"class="btn btn-danger">Hapus</a>
                                            </td>
                                            </tr>
                                        <?php 
                                            $no++;
                                            }
                                        ?>            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
