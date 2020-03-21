<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/color-admin/frontend/one-page-parallax/index_default_header.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:18:33 GMT -->
<head>
	<meta charset="utf-8" />
	<title>SMK INFORMATIKA UTAMA</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../admin/assets/css/one-page-parallax/app.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('admin/assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css')}}">
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body data-spy="scroll" data-target="#header" data-offset="51">
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top navbar-expand-lg">
			<!-- begin container -->
			<div class="container">
				<!-- begin navbar-brand -->
				<a href="index.html" class="navbar-brand">
					<span class="brand-logo"></span>
					<span class="brand-text">
						SMK INFORMATIKA UTAMA
					</span>
				</a>
				<!-- end navbar-brand -->
				<!-- begin navbar-toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- end navbar-toggle -->
				<!-- begin navbar-collapse -->
				<div class="collapse navbar-collapse" id="header-navbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item dropdown">
							<a class="nav-link active" href="#home" data-click="scroll-to-target" data-scroll-target="#home" data-toggle="dropdown">HOME</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="#about" data-click="scroll-to-target">PROFIL</a></li>
						<li class="nav-item"><a class="nav-link" href="#team" data-click="scroll-to-target">KARYAWAN</a></li>
						<li class="nav-item"><a class="nav-link" href="#contact" data-click="scroll-to-target">CONTACT</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" data-click="scroll-to-target" data-scroll-target="#" data-toggle="dropdown">LOGIN & REGISTER<b class="caret"></b></a>
							<div class="dropdown-menu dropdown-menu-left animated fadeInDown">
								<a class="dropdown-item" href="{{route('login')}}">Login Page</a>
								<a class="dropdown-item" href="{{route('register')}}">Register Page</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- end navbar-collapse -->
			</div>
			<!-- end container -->
		</div>
		<!-- end #header -->
		
		<!-- begin #home -->
		<div id="home" class="content has-bg home">
			<!-- begin content-bg -->
			<div class="content-bg" style="background-image: url(../admin/assets/img/bg/bg-home.jpg);" 
			data-paroller="true" 
			data-paroller-factor="0.5"
			data-paroller-factor-xs="0.25">
		</div>
		<!-- end content-bg -->
		<!-- begin container -->
		<div class="container home-content">
			<h3>Official Website</h3>
			<h1>SMK INFORMATIKA UTAMA</h1>
			<h2>Rekayasa Perangkat Lunak</h2>
		</div>
		<!-- end container -->
	</div>
	<!-- end #home -->

	<!-- begin #about -->
	<div id="about" class="content" data-scrollview="true">
		<!-- begin container -->
		<div class="container" data-animation="true" data-animation-type="fadeInDown">
			<h2 class="content-title">Profil</h2>
			<!-- begin row -->
			<div class="row">
				<!-- begin col-4 -->
				<div class="col-md-4 col-sm-12">
					<!-- begin about -->
					<div class="about">
						<h3 class="mb-3">Sejarah</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Vestibulum posuere augue eget ante porttitor fringilla. 
							Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
							non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
							Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
						</p>
						<p>
							In non libero at orci rutrum viverra at ac felis. 
							Curabitur a efficitur libero, eu finibus quam. 
							Pellentesque pretium ante vitae est molestie, ut faucibus tortor commodo. 
							Donec gravida, eros ac pretium cursus, est erat dapibus quam, 
							sit amet dapibus nisl magna sit amet orci. 
						</p>
					</div>
					<!-- end about -->
				</div>
				<!-- end col-4 -->

				<!-- begin col-4 -->
				<div class="col-md-4 col-sm-12">
					<!-- begin about -->
					<div class="about">
						<h3 class="mb-3">VISI & MISI</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Vestibulum posuere augue eget ante porttitor fringilla. 
							Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
							non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
							Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
						</p>
						<p>
							In non libero at orci rutrum viverra at ac felis. 
							Curabitur a efficitur libero, eu finibus quam. 
							Pellentesque pretium ante vitae est molestie, ut faucibus tortor commodo. 
							Donec gravida, eros ac pretium cursus, est erat dapibus quam, 
							sit amet dapibus nisl magna sit amet orci. 
						</p>
					</div>
					<!-- end about -->
				</div>
				<!-- end col-4 -->

				<!-- begin col-4 -->
				<div class="col-md-4 col-sm-12">
					<!-- begin about -->
					<div class="about">
						<h3 class="mb-3">Tujuan</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Vestibulum posuere augue eget ante porttitor fringilla. 
							Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
							non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
							Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
						</p>
						<p>
							In non libero at orci rutrum viverra at ac felis. 
							Curabitur a efficitur libero, eu finibus quam. 
							Pellentesque pretium ante vitae est molestie, ut faucibus tortor commodo. 
							Donec gravida, eros ac pretium cursus, est erat dapibus quam, 
							sit amet dapibus nisl magna sit amet orci. 
						</p>
					</div>
					<!-- end about -->
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>
	<!-- end #about -->

	<!-- begin #milestone -->
	<div id="milestone" class="content bg-black-darker has-bg" data-scrollview="true">
		<!-- begin content-bg -->
		<div class="content-bg" style="background-image: url(../admin/assets/img/bg/bg-milestone.jpg)"
		data-paroller="true" 
		data-paroller-factor="0.5"
		data-paroller-factor-md="0.01"
		data-paroller-factor-xs="0.01"></div>
		<!-- end content-bg -->
		<!-- begin container -->
		<div class="container">
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-md-4 milestone-col">
					<div class="milestone">
						<div class="number" data-animation="true" data-animation-type="number" data-final-number="121">121</div>
						<div class="title">Jumlah Siswa Aktif</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-4 milestone-col">
					<div class="milestone">
						<div class="number" data-animation="true" data-animation-type="number" data-final-number="300">300</div>
						<div class="title">Jumlah Siswa Sudah Lulus</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-4 milestone-col">
					<div class="milestone">
						<div class="number" data-animation="true" data-animation-type="number" data-final-number="15">15</div>
						<div class="title">Jumlah Karyawan SMKI UTAMA</div>
					</div>
				</div>
				<!-- end col-3 -->
				
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>
	<!-- end #milestone -->

	<!-- begin #team -->
	<div id="team" class="content" data-scrollview="true">
		<!-- begin container -->
		<div class="container">
			<h2 class="content-title">Karyawan</h2>
			<!-- begin row -->
			<div class="row">
				<!-- begin col-4 -->
				<div class="col-md-4 col-sm-12">
					<!-- begin team -->
					<div class="team">
						<div class="image" data-animation="true" data-animation-type="flipInX">
							<img src="../admin/assets/img/user/user-2.jpg" alt="Jonny Cash" />
						</div>
						<div class="info">
							<h3 class="name">Johnny Cash</h3>
							<div class="title text-primary">WEB DEVELOPER</div>
							<p></p>
							<div class="social">
								<a href="#"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
								<a href="#"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
								<a href="#"><i class="fab fa-google-plus-g fa-lg fa-fw"></i></a>
							</div>
						</div>
					</div>
					<BR>
					<!-- end team -->
				</div>
				<!-- end col-4 -->

				<div class="col-md-4 col-sm-12">
					<!-- begin team -->
					<div class="team">
						<div class="image" data-animation="true" data-animation-type="flipInX">
							<img src="../admin/assets/img/user/user-2.jpg" alt="Jonny Cash" />
						</div>
						<div class="info">
							<h3 class="name">Johnny Cash</h3>
							<div class="title text-primary">WEB DEVELOPER</div>
							<p></p>
							<div class="social">
								<a href="#"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
								<a href="#"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
								<a href="#"><i class="fab fa-google-plus-g fa-lg fa-fw"></i></a>
							</div>
						</div>
					</div>
					<BR>
					<!-- end team -->
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>
	<!-- end #team -->

	<!-- begin #quote -->
	<div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
		<!-- begin content-bg -->
		<div class="content-bg" style="background-image: url(../admin/assets/img/bg/bg-quote.jpg)"
		data-paroller-factor="0.5"
		data-paroller-factor-md="0.01"
		data-paroller-factor-xs="0.01">
	</div>
	<!-- end content-bg -->

	<!-- begin container -->
	<div class="container" data-animation="true" data-animation-type="fadeInLeft">
		<!-- begin row -->
		<div class="row">
			<!-- begin col-12 -->
			<div class="col-md-12 quote">
				<i class="fa fa-quote-left"></i> Passion leads to design, design leads to performance, <br />
				performance leads to <span class="text-primary">success</span>!  
				<i class="fa fa-quote-right"></i>
				<small>Sean Themes, Developer Teams in Malaysia</small>
			</div>
			<!-- end col-12 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</div>
<!-- end #quote -->

<!-- begin #contact -->
<div id="contact" class="content bg-silver-lighter" data-scrollview="true">
	<!-- begin container -->
	<div class="container">
		<h2 class="content-title">Contact Us</h2>
		<p class="content-desc">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
			sed bibendum turpis luctus eget
		</p>
		<!-- begin row -->
		<div class="row">
			<!-- begin col-6 -->
			<div class="col-md-6" data-animation="true" data-animation-type="fadeInLeft">
				<h3>If you have a project you would like to discuss, get in touch with us.</h3>
				<p>
					Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus.
				</p>
				<p>
					<strong>SeanTheme Studio, Inc</strong><br />
					795 Folsom Ave, Suite 600<br />
					San Francisco, CA 94107<br />
					P: (123) 456-7890<br />
				</p>
				<p>
					<span class="phone">+11 (0) 123 456 78</span><br />
					<a href="mailto:hello@emailaddress.com" class="text-primary">seanthemes@support.com</a>
				</p>
			</div>
			<!-- end col-6 -->
			<!-- begin col-6 -->
			<div class="col-md-6 form-col" data-animation="true" data-animation-type="fadeInRight">
				<form class="form-horizontal">
					<div class="form-group row m-b-15">
						<label class="col-form-label col-md-3 text-md-right">Name <span class="text-primary">*</span></label>
						<div class="col-md-9">
							<input type="text" class="form-control" />
						</div>
					</div>
					<div class="form-group row m-b-15">
						<label class="col-form-label col-md-3 text-md-right">Email <span class="text-primary">*</span></label>
						<div class="col-md-9">
							<input type="text" class="form-control" />
						</div>
					</div>
					<div class="form-group row m-b-15">
						<label class="col-form-label col-md-3 text-md-right">Message <span class="text-primary">*</span></label>
						<div class="col-md-9">
							<textarea class="form-control" rows="10"></textarea>
						</div>
					</div>
					<div class="form-group row m-b-15">
						<label class="col-form-label col-md-3 text-md-right"></label>
						<div class="col-md-9 text-left">
							<button type="submit" class="btn btn-primary btn-theme btn-block">Send Message</button>
						</div>
					</div>
				</form>
			</div>
			<!-- end col-6 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</div>
<!-- end #contact -->

<!-- begin #footer -->
<div id="footer" class="footer">
	<div class="container">
		<div class="footer-brand">
			<div class="footer-brand-logo"></div>
			Color Admin
		</div>
		<p>
			&copy; Copyright Color Admin 2019 <br />
			An admin & front end theme with serious impact. Created by <a href="#">SeanTheme</a>
		</p>
		<p class="social-list">
			<a href="#"><i class="fab fa-facebook-f fa-fw"></i></a>
			<a href="#"><i class="fab fa-instagram fa-fw"></i></a>
			<a href="#"><i class="fab fa-twitter fa-fw"></i></a>
			<a href="#"><i class="fab fa-google-plus-g fa-fw"></i></a>
			<a href="#"><i class="fab fa-dribbble fa-fw"></i></a>
		</p>
	</div>
</div>
<!-- end #footer -->

</div>
<!-- end #page-container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="../admin/assets/js/one-page-parallax/app.min.js"></script>
<!-- ================== END BASE JS ================== -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-53034621-1', 'auto');
	ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from seantheme.com/color-admin/frontend/one-page-parallax/index_default_header.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:18:33 GMT -->
</html>
