<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/color-admin/admin/material/login_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 11:27:02 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('admin/assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css')}}">
	<link href="{{asset('admin/assets/css/material/app.min.css')}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">Loading...</div>
		</div>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-11.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>Color</b> Admin App</h4>
					<p>
						Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						<span class="logo"></span> <b>Color</b> Admin
						<small>responsive bootstrap 4 admin template</small>
					</div>
					<div class="icon">
						<i class="fa fa-sign-in-alt"></i>
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
					<form action="{{route('login')}}" method="POST">
						{{@csrf_field()}}
						<div class="form-group m-b-15">
							<input type="text" name="username" class="form-control {{$errors->has('username') ? 'is_invalid' : ''}} form-control-lg" type="text" name="username" placeholder="Masukan USERNAME ANDA" value="{{old('username')}}"/>
						</div>
						<div class="form-group m-b-15">
							<input type="password" name="password" class="form-control {{$errors->has('password') ? 'is_invalid' : ''}} form-control-lg" placeholder="Masukan Password Anda" value="{{old('username')}}"/>
						</div>
						
						<div class="login-buttons">
							<button type="submit" class="btn btn-aqua btn-block btn-lg">Sign me in</button>
						</div>
						<div class="m-t-20 m-b-40 p-b-40 text-inverse">
							Not a member yet? Click <a href="{{route('register')}}">here</a> to register.
						</div>
						<hr />
						<p class="text-center text-grey-darker mb-0">
							&copy;
						</p>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->
		
		<!-- begin theme-panel -->
		
		<!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('admin/assets/js/app.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/theme/material.min.js')}}"></script>
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

<!-- Mirrored from seantheme.com/color-admin/admin/material/login_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 11:27:03 GMT -->
</html>