<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/flatpickr.min.css">


	<title>Blogy &mdash; Template by Raihan</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start">Sports<span class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-children">
									<a href="category.html">Pages</a>
									<ul class="dropdown">
										<li><a href="search-result.html">Search Result</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="single.html">Blog Single</a></li>
										<li><a href="category.html">Category</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="#">Menu One</a></li>
										<li><a href="#">Menu Two</a></li>
										<li class="has-children">
											<a href="#">Dropdown</a>
											<ul class="dropdown">
												<li><a href="#">Sub Menu One</a></li>
												<li><a href="#">Sub Menu Two</a></li>
												<li><a href="#">Sub Menu Three</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="category.html">Sepak Bola</a></li>
								<li><a href="category.html">Basket</a></li>
								<li><a href="category.html">Volly</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- Start retroy layout blog posts -->
	<section class="section bg-light">
		<div class="container">
			<div class="row align-items-stretch retro-layout">
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('images/kingmadrid.jpg');"></div>

						<div class="text">
							<span class="date">Mei. 25th, 2025</span>
							<h2>Lapangan Sepak Bola</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('images/lapangbasket.jpg');"></div>

						<div class="text">
							<span class="date">April. 14th, 2025</span>
							<h2>Lapangan Basket</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url('images/olahraga.jpg');"></div>

						<div class="text">
							<span class="date">Feb. 21th, 2025</span>
							<h2>Mengenal Semua Jenis Olahraga Bola Besar dan Kecil!</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('images/lapangvolly.png');"></div>

						<div class="text">
							<span class="date">Nov. 19th, 2025</span>
							<h2>Lapangan Volly</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('images/lapangbadminton.jpg');"></div>

						<div class="text">
							<span class="date">Jul. 30th, 2025</span>
							<h2>Lapangan Bulu Tangkis</h2>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End retroy layout blog posts -->

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h1 class="posts-entry-title">Sepak Bola</h1>
				</div>
			</div>
			<div class="row g-3">
    			@foreach ($artikel->take(2) as $data)
        			<div class="col-md-6">
            			<div class="blog-entry">
                			@if ($data->foto)
                    			<img src="{{ asset('storage/artikel/' . $data->foto) }}"
                        			alt="Gambar"
                        			class="img-fluid"
                        			style="width: 100%; height: 300px; object-fit: cover;">
                			@else
                    			<div class="bg-light d-flex align-items-center justify-content-center"
                         			style="width: 100%; height: 300px;">
                        			Tidak ada gambar
                    			</div>
               				@endif
                			<h2><a href="single.html">{{ \Illuminate\Support\Str::limit($data->judul, 40) }}</a></h2>
                			<p>{{ \Illuminate\Support\Str::limit($data->deskripsi, 100) }}</p>
							<p><a href="#" class="read-more">Baca Selengkapnya</a></p>
            			</div>
        			</div>
    			@endforeach
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<section class="section posts-entry posts-entry-sm bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/ronaldo.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/ronaldo.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/ronaldo.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/ronaldo.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h1 class="posts-entry-title">Basket</h1>
				</div>
			</div>
			<div class="row g-3">
    			@foreach ($artikel->skip(2)->take(2) as $data)
        			<div class="col-md-6">
            			<div class="blog-entry">
                			@if ($data->foto)
                    			<img src="{{ asset('storage/artikel/' . $data->foto) }}"
                        			alt="Gambar"
                        			class="img-fluid"
                        			style="width: 100%; height: 300px; object-fit: cover;">
                			@else
                    			<div class="bg-light d-flex align-items-center justify-content-center"
                         			style="width: 100%; height: 300px;">
                        			Tidak ada gambar
                    			</div>
               				@endif
                			<h2><a href="single.html">{{ \Illuminate\Support\Str::limit($data->judul, 40) }}</a></h2>
                			<p>{{ \Illuminate\Support\Str::limit($data->deskripsi, 100) }}</p>
							<p><a href="#" class="read-more">Baca Selengkapnya</a></p>
            			</div>
        			</div>
    			@endforeach
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h1 class="posts-entry-title">Volly</h1>
				</div>
			</div>
			<div class="row g-3">
    			@foreach ($artikel->skip(4)->take(2) as $data)
        			<div class="col-md-6">
            			<div class="blog-entry">
                			@if ($data->foto)
                    			<img src="{{ asset('storage/artikel/' . $data->foto) }}"
                        			alt="Gambar"
                        			class="img-fluid"
                        			style="width: 100%; height: 300px; object-fit: cover;">
                			@else
                    			<div class="bg-light d-flex align-items-center justify-content-center"
                         			style="width: 100%; height: 300px;">
                        			Tidak ada gambar
                    			</div>
               				@endif
                			<h2><a href="single.html">{{ \Illuminate\Support\Str::limit($data->judul, 40) }}</a></h2>
                			<p>{{ \Illuminate\Support\Str::limit($data->deskripsi, 100) }}</p>
							<p><a href="#" class="read-more">Baca Selengkapnya</a></p>
            			</div>
        			</div>
    			@endforeach
			</div>
	</section>

	<div class="section bg-light">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h1 class="posts-entry-title">Bulu Tangkis</h1>
				</div>
			</div>
			<div class="row g-3">
    			@foreach ($artikel->skip(6)->take(2) as $data)
        			<div class="col-md-6">
            			<div class="blog-entry">
                			@if ($data->foto)
                    			<img src="{{ asset('storage/artikel/' . $data->foto) }}"
                        			alt="Gambar"
                        			class="img-fluid"
                        			style="width: 100%; height: 300px; object-fit: cover;">
                			@else
                    			<div class="bg-light d-flex align-items-center justify-content-center"
                         			style="width: 100%; height: 300px;">
                        			Tidak ada gambar
                    			</div>
               				@endif
                			<h2><a href="single.html">{{ \Illuminate\Support\Str::limit($data->judul, 40) }}</a></h2>
                			<p>{{ \Illuminate\Support\Str::limit($data->deskripsi, 100) }}</p>
							<p><a href="#" class="read-more">Baca Selengkapnya</a></p>
            			</div>
        			</div>
    			@endforeach
			</div>
		</div>
	</div>

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">About</h3>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum maiores nesciunt sit cumque veritatis id ducimus, dignissimos sapiente mollitia suscipit laboriosam corrupti ea. Beatae atque, impedit facere molestiae in natus?</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Social</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-apple"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-google"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
					<div class="widget">
						<h3 class="mb-4">Company</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Creative</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">Recent Post Entry</h3>
						<div class="post-entry-footer">
							<ul>
								<li>
									<a href="">
										<img src="images/img_1_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/img_2_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/img_3_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>


					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed by <a href="https://themewagon.com">Raihan</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>

    <script src="js/flatpickr.min.js"></script>


    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

    
  </body>
  </html>