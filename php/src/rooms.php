<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="zxx">

<?php include 'head.php';?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <?php include 'header.php';?>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1>Our Hotel Rooms</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Rooms Section Begin -->
    <section class="rooms spad">
        <div class="container">
        <?php
            $sql=mysqli_query($conn, "SELECT * FROM kamar");
            foreach($sql as $value){
            ?>
                <div class="container">
                    <div class="room__text">
                        <h3><?= $value['Jenis']; ?></h3>
                        <h4>Price</h4>
                                <h2><sup>Rp.</sup><?= $value['Tarif']; ?> <span>per day</h2>
                                
                        <ul>
                            <li><span>Type:</span><?= $value['Type']; ?><span> Bed</li>
                            <li><span>Deskripsi:</span><?= $value['deskripsi']; ?></li>
                        </ul>
                        <a href="reservasi.php">BOOKING</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <?php include 'footer.php';?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>