<?php include 'koneksi.php'; ?>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Basic Initialisation</h4>
                          <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                          </div>
                      </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Transaksi</h4>
                                <div class="table-responsive">
                                  <div class="table-responsive">
                                  <?php $thn_ini=date("Y");?>
                                      <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                          <thead>
                                          <form method="POST" action="">
                                          <td>-Pilih Tanggal-</td><td><input type="year" name="thn_ini" value="<?php echo $thn_ini; ?>"></td>
                                          <td><button type="submit" name="cari" style="background-color: red;">Cari</td>
                                          </tr>
                                          </form>
                                              <tr>
                                                  <th>No</th>
                                                  <th>No Faktur</th>
                                                  <th>No Kamar</th>
                                                  <th>No ID</th>
                                                  <th>Tanggal Masuk</th>
                                                  <th>Tanggal Keluar</th>
                                                  <th>Lama Menginap</th>
                                                  <th>Tarif</th>                                               
                                              </tr>
                                          </thead>
                                          <?php  
                                            include "koneksi.php";
                                            if (isset($_POST['cari'])){
                                              $thn=$_POST['thn_ini'];
                                              $sql= mysqli_query($con, "select * from transaksi where transaksi.tgl_masuk LIKE '%$_POST[thn_ini]%'");
                                              }else{
                                            $sql = mysqli_query($con,"select * from transaksi");
                                            }
                                            $no=1;
                                            $total=0;
                                            while($row=mysqli_fetch_array($sql)){
                                            $total=$row['lama_menginap'] * $row['Tarif'];
                                            ?>
                                          <tbody>
                                            <tr>                                              
                                              <td align="center"><?php echo $no; ?></td>
                                              <td align="center"><?php echo $row['No_Faktur'] ?> </td>
                                              <td align="center"><?php echo $row['No_Kamar'] ?> </td>
                                              <td align="center"><?php echo $row['id_pelanggan'] ?> </td>
                                              <td align="center"><?php echo $row['tgl_masuk'] ?> </td>
                                              <td align="center"><?php echo $row['tgl_keluar'] ?> </td>
                                              <td align="center"><?php echo $row['lama_menginap'] ?> </td>
                                              <td align="center"><?php echo $row['Tarif'] ?> </td>
                                              <td></td>
                                            </tr>
                                          </tbody>
                                          <?php 
                                            $no++;
                                            }
                                          ?>
                                      </table>
                                  </div>
                                </div>
                            </div>
                            <td align="center">
                            <a href="cetakpertahun.php?module=cetakpertahun&thn_ini=<?php echo $_POST['thn_ini'];?>" class="btn btn-success">CETAK</a>
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