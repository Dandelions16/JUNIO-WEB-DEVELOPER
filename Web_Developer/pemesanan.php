<?php
include'koneksi.php';
date_default_timezone_set("Asia/jakarta");
session_start();
if(isset($_SESSION['sesi'])){
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/pemesanan.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
    <title>FORM PEMASANAN</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <div class="container-fluid">
            <a href="index.php"
            class="navbar-brand"><img src="https://chamchix.com/unindra/images/logo_unindra_3.png" height="45" alt="CoolBrand"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="https://www.instagram.com/rafhi_arizkiaa/?hl=id" class="nav-item nav-link">Profile</a>
                </div>
                <div class="navbar-nav ms-auto ">
                    <a class="nav-icon nav-link fa fa-user icon">
                        <?php echo $_SESSION['sesi'];?>
                    </a>
                    <a class="nav-item nav-link disabled" tabindex="-1">
                        <spand id="jam"></spand>
                    </a>
                    <a href="logout.php" class="nav-item nav-link">Keluar</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper-outer">
    <div class="wrapper-inner">
        <div class="container">
                <h1>PEMESANAN</h1>
                <form method="post" class="registration-form">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input id="nama" class="input" type="text" name="nama" placeholder="Nama Lengkap" required value="<?= $_POST['nama'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="KTP">Nomor Identitas</label>
                        <input id="KTP" class="input" type="text" name="ktp" placeholder="No KTP" required value="<?= $_POST['ktp'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="no">No.HP</label>
                        <input id="no" class="input" type="text" name="hp" placeholder="No Aktif" required value="<?= $_POST['hp'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="wisata">Choose a wisata:</label>
                        <select name="wisata" id="wisata" class="input">
                    <option selected>Pilih wisata</option>
                    <?php
                    $query= mysqli_query($db,"SELECT * FROM tbwisata");
                    while($row = mysqli_fetch_array($query)){
                    ?>
                    <?php 
                    if($_POST['wisata'] == $row['nama_wisata']) {
                    ?>
                    <option value= "<?=$row['nama_wisata']?>" selected><?=$row['nama_wisata']?> </option>
                    <?php } else { ?>
                    <option value= "<?=$row['nama_wisata']?>"><?=$row['nama_wisata']?> </option>
                    <?php } ?>
                    <?php }
                    ?> 
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Kunjungan:</label>
                        <input type="date" id="tanggal" name="tanggal" class="input" value="<?= $_POST['tanggal'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="dewasa">Pengunjung Dewasa</label>
                        <input id="dewasa" class="input" type="text" name="dewasa" placeholder="Harga Normal" value="<?= $_POST['dewasa'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="anak">Pengunjung Anak-Anak</label>
                        <input id="anak" class="input" type="text" name="anak" placeholder="Disc 50%" value="<?= $_POST['anak'] ?? '' ?>">
                    </div>
                    <?php
                    $total = 0;
                    $tiket = 10000;
                    $disc = 0.5;
                    if (isset($_POST['hitung'])){
                    $anak = $_POST ['anak'];
                    $dewasa = $_POST['dewasa'];

                      // mendeklrasikan variable 
                    $total_dewasa = $dewasa * $tiket;
                    $total_anak   = $anak* $tiket * $disc;
                    $total= $total_dewasa + $total_anak;
                    }
                    ?>
                    <div class="form-group">
                        <label for="">Harga Tiket</label>
                        <input type="text" value="<?php echo number_format($tiket) ?? '0' ?>" readonly class="bg-transparent text-dark border-0" name="harga_tiket">
                    </div>
                    <div class="form-group">
                        <label for="">Total Bayar</label>
                        <input type="text" value="<?php echo number_format($total) ?? '0' ?>" readonly class="bg-transparent text-dark border-0" name="total">
                    </div>
                    <input type="checkbox" name="chek" id="check" value="Membaca" required><label for="check"> Saya dan/atau rombongan telah membaca,
                    memahami, dan setuju berdasarkan syarat dan ketenuan yang telah diterapkan</label>
                    <br>
                    <div class="button-group">
                        <input type="submit" value="Hitung Total Bayar" name="hitung">
                        <input type="submit" value="Pesan" name="Pesan">
                        <input type="reset" value="cancel">
                    </div>
                </form>
        </div>
    </div>
    </div>
    <?php
    if (isset($_POST['Pesan'])){
      // Ambil data dari formulir
    $nama = $_POST ['nama'];
    $ktp  = $_POST ['ktp'];
    $hp   = $_POST ['hp'];
    $tmptwisata = $_POST ['wisata'];
    $date = $_POST ['tanggal'];
    $dewasa = $_POST ['dewasa'];
    $anak = $_POST ['anak'];
    $hitung ='Rp '. $_POST['total'];
      // buat( query)
    $sql = "INSERT INTO tbpemesanan (id_pemesan, nama, identitas, nohp, wisata, waktu, dewasa, anak, bayar) VALUES (NULL, '$nama','$ktp','$hp','$tmptwisata','$date','$dewasa','$anak','$hitung')";
    $query = mysqli_query($db,$sql);
      // cek apakah query berhasil disimpan
    if ($query){
        echo "<script>window.alert('Data Berhasil Disimpan')</script>";
    }else{
        echo " <script>window.alert('Data Gagal Disimpan')</script>";
    }
    }
    
    ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
    </script>
    <script type="text/javascript">
        window.onload = function() { jam(); }
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
            e.innerHTML = h +':'+ m +':'+ s;
            setTimeout('jam()', 1000);
        }
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
</body>
</html>
<?php
}
else {
    echo "<script>alert('Anda harus masuk terlebih dahulu');</script>"; 
    echo "
	<meta http-equiv='refresh' content='0; url=login.php'>";
}
?>