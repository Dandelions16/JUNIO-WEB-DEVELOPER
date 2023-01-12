<?php
include'koneksi.php';
date_default_timezone_set("Asia/jakarta");
session_start();
if(isset($_SESSION['sesi'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
<title>index</title>
</head>
<body>
<div class="wrapper-outer">
	<div class="wrapper-inner">
		<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
		<div class="container-fluid">
			<a href="index.php" class="navbar-brand"><img src="https://chamchix.com/unindra/images/logo_unindra_3.png" height="45" alt="CoolBrand"></a>
			<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav">
					<a href="index.php" class="nav-item nav-link active">Home</a>
					<a href="https://www.instagram.com/rafhi_arizkiaa/?hl=id" class="nav-item nav-link">Profile</a>
					<a href="pemesanan.php" class="nav-item nav-link">Pesan</a>
				</div>
				<div class="navbar-nav ms-auto ">
					<a class="nav-icon nav-link fa fa-user icon"> <?php echo $_SESSION['sesi'];?></a>
					<a class="nav-item nav-link disabled" tabindex="-1"><spand id="jam"></spand></a>
					<a href="logout.php" class="nav-item nav-link">Keluar</a>
				</div>
			</div>
		</div>
		</nav>
		<div class="container-fluid">
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="14000" >
          <video class="img-fluid w-100" autoplay loop muted >
            <source src="slide1.mp4" type="video/mp4" />
            </video>
						<div class="carousel-caption d-none d-md-block">
							<h5>MINANGKABAU</h5>
						</div>
					</div>
					<div class="carousel-item" data-bs-interval="20000" >
          <video class="img-fluid w-100 " autoplay loop muted >
            <source src="slide2.mp4" type="video/mp4" />
            </video>
						<div class="carousel-caption d-none d-md-block">
							<h5>BORSEL</h5>
						</div>
					</div>
					<div class="carousel-item" data-bs-interval="25000">
          <video class="img-fluid w-100" autoplay loop muted >
            <source src="slide3.mp4" type="video/mp4" />
            </video>
						<div class="carousel-caption d-none d-md-block">
							<h5>TORONIPA</h5>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
		<!--Main layout-->
		<main class="mt-5">
		<div class="container">
			<!--Section: Content-->
			<section>
			<div class="row">
				<div class="col-md-6 gx-5 mb-4">
					<div class="bg-image hover-overlay shadow-2-strong" data-mdb-ripple-color="light">
						<img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/PDIKM_saat_dipotret_digitalisasi.jpg" class="img-fluid"/>
						<a href="#!">
						<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
						</a>
					</div>
				</div>
				<div class="col-md-6 gx-5 mb-4">
					<h4><strong>Rekomendasi</strong></h4>
					<p class="text-muted">
          Kalau mendengar kata Padang, kamu pasti teringat akan Sate Padang, Soto Padang, Rumah Gadang, ya, ngaku deh? Padang memang salah satu kota besar yang punya karakter. Terlebih jika kalian punya teman orang Padang, mereka punya prinsip “pantang pulang sebelum sukses”. Kerap kali teman Padang kalian adalah orang yang gigih dan ambisius. Jadi cukup mudah mengingat karakter Padang dan orang-orangnya.
          Tapi tahukah kalian, Padang dan sekitarnya menawarkan banyak hal yang sayang untuk tidak disaksikan dengan mata kepala sendiri. Berikut rangkumannya yang saya temui disana.
					</p>
					<p>
						<strong>Alasan Wajib Ke Sumatra Barat</strong>
					</p>
					<p class="text-muted">
						1.Pemdangan tak kalah jauh dari Selandia baru <br>
            2.Kota Kelahiran bapak bangsa Indonesia<br>
            3.Wisata Budaya Minang dan Sejarah Melawan Penjajahan<br>
            4.Kuliner lezat 
					</p>
				</div>
			</div>
			</section>
			<!--Section: Content-->
			<hr class="my-5"/>
			<!--Section: Content-->
			<section class="text-center">
			<h4 class="mb-5"><strong>PILIHAN WISATA</strong></h4>
			<div class="row">
				<div class="col-lg-4 col-md-12 mb-4">
					<div class="card">
						<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							<img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Jam_Gadang_Okt_2020_1_crop.jpg" class="img-fluid"/>
							<a href="pemesanan.php">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
							</a>
						</div>
						<div class="card-body ">
							<h5 class="card-title">MINANGKABAU</h5>
							<p class="card-text">
              Terletak di Sumatra Barat
							</p>
							<a href="pemesanan.php" class="btn btn-primary">Pesan</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card">
						<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							<img src="https://totabuan.co/wp-content/uploads/2018/06/Pantai-Wisata-Bolsel.jpg" class="img-fluid"/>
							<a href="pemesanan.php">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
							</a>
						</div>
						<div class="card-body">
							<h5 class="card-title">BORSEL</h5>
							<p class="card-text">
              Terletak di Kecamatan Pinolosian Timur..
							</p>
							<a href="pemesanan.php" class="btn btn-primary">Pesan</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card">
						<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							<img src="https://assets.kompasiana.com/items/album/2016/07/18/pulau-bokori-500x330-578c29907697735f07856cb4.jpg?t=o&v=770" class="img-fluid"/>
							<a href="pemesanan.php">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
							</a>
						</div>
						<div class="card-body">
							<h5 class="card-title">TORONIPA</h5>
							<p class="card-text">
              Pantai ini terletak di Kabupaten Konawe.
							</p>
							<a href="pemesanan.php" class="btn btn-primary">pesan</a>
						</div>
					</div>
				</div>
			</div>
			</section>
			<!--Section: Content-->
		</div>
	</div>
	<!--Main layout-->
    <main>
      <hr class="my-5"/>
		</main>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
  echo "<script>alert('Anda harus masuk terlebih dahulu');</script>
	"; echo "
	<meta http-equiv='refresh' content='0; url=login.php'>
";
}
?>