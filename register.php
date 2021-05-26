<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

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
                        <h1>Register Form</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section site-section-sm">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 col-lg-8 mb-5">
				
				
				
				<form enctype="multipart/form-data" action="simpan_register.php" method="post" class="p-5 bg-white">
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="fullname">Nama Lengkap</label>
							<input type="text" id="fullname" name="nama" class="form-control" placeholder="Full Name">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label class="font-weight-bold" for="username">Username</label>
							<input type="text" id="username" name="username" class="form-control" placeholder="username">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="pasword">Pasword</label>
							<input type="text" id="pasword" name="password" class="form-control" placeholder="pasword">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="no_hp">No.HP</label>
							<input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="no_hp">
						</div>
					</div>
					<div action="proses.php" method="get">
					      <p>Jenis Kelamin</p>
					      <p><input type='radio' name='jk' value='Laki - Laki' />Laki Laki</p>
					      <p><input type='radio' name='jk' value='Perempuan' />Perempuan</p>
					 </div>     
					<div class="row form-group">
						<div class="col-md-12">
							<label class="font-weight-bold" for="alamat">Alamat</label>
							<textarea id="alamat" name="alamat" cols="30" rows="5" class="form-control" placeholder="masukan alamat anda!!"></textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="email">Email</label>
							<input type="text" id="email" name="email" class="form-control" placeholder="email">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" name="submit" value="Registrasi" class="btn btn-primary pill px-4 py-2">							
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>

    <!-- This templates was made by Colorlib (https://colorlib.com) -->
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