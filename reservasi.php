<?php include 'koneksi.php'; ?>
<?php
if (!isset($_GET['konf'])) {
  ?>
  <?php include 'head.php';?>
<?php include 'header.php';?>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row" style="margin: 30pt;">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Pemesanan Kamar</h2>
        </div>
      </div>
      <div class="row" style="margin: -70pt">
        <div class="col-md" data-aos="fade-up" data-aos-delay="100">
          <form action="proses_reservasi.php" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="row">
              <div class="col-md form-group">
                <label class="text-black font-weight-bold" for="kamar">Pilih Jenis Kamar</label>
                <select required name="kamar" id="kamar" class="form-control" >
                  <option value="">--Pilih Kamar--</option>
                  <?php
                  $sql = mysqli_query($conn, "SELECT * FROM kamar");
                  foreach ($sql as $value) {
                    ?>
                    <option value="<?= $value['No_Kamar']; ?>"><?= $value['Jenis']; ?> : <?= $value['Tarif']?></option>
                  <?php
                }
                ?>
                </select>
              </div>
            </div>
            <div id="dvkecamatan">
              <div class="row">
                <div class="col-md-12 form-group">
                  <!-- <label class="text-black font-weight-bold" for="gambar">Gambar</label>
                  <input type="text" id="name" class="form-control "> 

                  <img src="images/" alt="Gambar tidak di temukan" name="kecamatan" id="kecamatan"> -->

                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="tarif">Tarif</label>
                  <input type="text" id="tarif" name="tarif" class="form-control" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="nama">Nama</label>
                <input required type="text" id="nama" name="nama" class="form-control" value="<?php echo $_SESSION['nama']; ?>" />
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="phone">Telepon</label>
                <input required type="text" id="phone" name="nohp" class="form-control " value="<?php echo $_SESSION['no_hp']; ?>"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="email">Email</label>
                <input required type="email" id="email" name="email" class="form-control " value="<?php echo $_SESSION['email']; ?>"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkin_date">Tanggal Check In</label>
                <input required type="date" id="checkin_date" name="checkin" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkout_date">Tanggal Check Out</label>
                <input required type="date" id="checkout_date" name="checkout" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="adults" class="font-weight-bold text-black">Jumlah Tamu</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="jml_tamu" id="adults" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="message">Catatan Tambahan</label>
                <textarea name="pesan" id="message" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Pesan Sekarang!" name="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!--  -->
<?php
} 
   ?>
  


