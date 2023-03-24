<?php include 'header.php'; ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
				<h1 class="text-warning" style="font-size: 100px;font-weight: 900;">SELAMAT DATANG DI</h1>
			</div>
			<img class="d-block w-100" src="foto/bgdepan.jpg" style="height: 650px;">
		</div>
		<div class="carousel-item">
			<div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
				<h1 class="text-warning" style="font-size: 100px;font-weight: 900;">CV. BINA LESTARI</h1>
			</div>
			<img class="d-block w-100" src="foto/bgdepan2.jpeg" style="height: 650px;">
		</div>
		<div class="carousel-item">
			<div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
				<h1 class="text-warning" style="font-size: 80px;font-weight: 900;">MENJUAL PROPERTY STRATEGIS DAN MURAH</h1>
			</div>
			<img class="d-block w-100" src="foto/bgdepan3.jpg" style="height: 650px;">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<section id="kategori" class="ftco-section">
	<div class="container">
		<h3 class="mb-4">Tentang Kami</h3>
		<p class="text-justify">CV. BINA LESTARI merupakan perusahaan yang bergerak di bidang penjualan property khususnya perumahan yang berlokasi di Kota Pontianak.</p>
	</div>
</section>

<section>
	<div class="container">
		<div class="row mb-3 pb-3">
			<div class="col-md-12 heading-section ftco-animate">
				<h3 class="mb-4 text-center">Perumahan Terbaru</h3>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<?php
			$ambil = $koneksi->query("SELECT *FROM produk order by idproduk desc limit 3");
			while ($produk = $ambil->fetch_assoc()) {
				$ambilfoto = $koneksi->query("SELECT * FROM produkfoto WHERE idproduk='$produk[idproduk]' limit 1");
				$foto = $ambilfoto->fetch_assoc();
			?>
				<div class="col-md-4 ftco-animate">
					<div class="product">
						<a href="detail.php?id=<?php echo $produk['idproduk']; ?>" class="img-prod"><img class="img-fluid" src="foto/<?php echo $foto['foto'] ?>" style="height:300px;width:100%" alt="">
							<div class=" overlay">
							</div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="detail.php?id=<?php echo $produk['idproduk']; ?>"><?php echo $produk['namaproduk'] ?></a></h3>
							<p class=""><span>Tipe : <?= $produk['tiperumah'] ?></span></p>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>Rp <?php echo number_format($produk['hargaproduk']) ?></span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="detail.php?id=<?php echo $produk['idproduk']; ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="fa fa-arrow-right"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php
include 'footer.php';
?>