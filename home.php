<?php 
 
session_start();
 
if (!isset($_SESSION['level'])) {
    header("Location: index.php");
}
 
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="#">MENU</a></li>
					<li><a href="member.php">Members</a></li>
					<li><a href="layanan.php">Layanan Digital</a></li>
					<li><a href="produk.php">Produk</a></li>
					<li><a href="promo.php">Promo</a></li>
					<li><a href="relasi.php">Data Relasi</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</aside> <!-- END COLORLIB-ASIDE -->

		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">
							<h1 class="h2">Keanggotaan</h1>
							<p>Dapatkan pengalaman berbelanja terbaik dengan bergabung Bersama member Alfamart.</p>
						</div>
						<div class="col-md-6">
							<h2 class="h4">Bagaimana Cara Menjadi Member AlfamartKu ?</h2>
							<p>Kemudahan selalu kami utamakan agar pelanggan setia kami dapat dengan mudah bergabung menjadi member Alfamart.Dengan mengunjungi toko Alfamart terdekat , kamu bisa mendapatkan kartu Member dan melakukan aktivasi. Kartu member juga tersedia di Aplikasi Alfagift dalam bentuk digital. Tunjukkan kartu member ataupun dengan menyebutkan nomor handphone, Member akan mendapat manfaat dan penawaran yang begitu banyak. </p>
						</div>
						<div class="col-md-6">
							<h2 class="h4">Manfaat dan Kebaikan Program Keanggotaan Alfamart*</h2>
							<p>Sebagai bentuk penghargaan kami kepada konsumen, kami memberikan fasilitas Keanggotaan Alfamart agar pengalaman berbelanja anda semakin berkesan berbagai manfaat dan kebaikan yang kami berikan. Banyak keuntungan yang bisa didapatkan dengan menjadi member Alfamart seperti bonus poin, informasi promo-promo terbaru, potongan harga, undian berhadiah, dan masih banyak lainnya.</p>
						</div>
					</div>
				</div>
			</section>
			<div class="container-fluid">
<?php include 'tb_members.php';?>
</div>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

