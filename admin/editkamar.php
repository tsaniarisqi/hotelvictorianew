<?php 
include 'koneksi.php';
$id=$_GET['No_Kamar'];
$sql= mysqli_query($con,"select * from kamar where No_Kamar='$id'");
$data=mysqli_fetch_array($sql);
?>
<html lang="en">

<head>
    <title>Form Entri Kamar</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>No.Kamar</td>
                <td>:</td>
                <td> <input type="text" name="No_Kamar" id="" value="<?php echo $data['No_Kamar']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Nama Kamar</td>
                <td>:</td>
                <td> <input type="text" name="Jenis" id="" value="<?php echo $data['Jenis']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Tipe Bed</td>
                <td>:</td>
                <td> <input type="text" name="Type" id="" value="<?php echo $data['Type']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Tarif</td>
                <td>:</td>
                <td> <input type="text" name="Tarif" id="" value="<?php echo $data['Tarif']?>"> </td>
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
        $No_Kamar = $_POST['No_Kamar'];
        $Jenis = $_POST['Jenis'];
        $Type= $_POST['Type'];
        $Tarif= $_POST['Tarif'];

        $q = mysqli_query($con, "UPDATE kamar SET No_Kamar='$_POST[No_Kamar]',Jenis='$_POST[Jenis]',Type='$_POST[Type]',Tarif='$_POST[Tarif]' where No_Kamar='$_POST[No_Kamar]'");
	
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='index.php?module=tabelkamar';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=tabelkamar';</script>";
        }
    }

    ?>

</body>

</html>