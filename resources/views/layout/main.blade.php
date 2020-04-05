<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/color-admin/admin/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 11:21:13 GMT -->
<head>
	<meta charset="utf-8" />
	<title>@yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('admin/assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css')}}">
	<link href="{{asset('admin/assets/css/material/app.min.css')}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{asset('admin/assets/plugins/jvectormap-next/jquery-jvectormap.css')}}" rel="stylesheet" />
	<link href="{{asset('admin/assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
	@stack('css')
	<!-- ================== END PAGE LEVEL STYLE ================== -->
</head>
<body>
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
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed navbar-toggle-left" data-click="sidebar-minify">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{route('dashboard')}}" class="navbar-brand">
					SMK INFORMATIKA UTAMA
				</a>
			</div>
			<!-- end navbar-header -->

			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="d-none d-md-inline">Hi, {{auth()->user()->nama_karyawan}}</span>
						<img src="{{asset('images/'.auth()->user()->avatar)}}" alt=""/>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="{{route('logout')}}" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar" data-disable-slide-animation="true">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="{{asset('images/'.auth()->user()->avatar)}}" alt="" />
							</div>
							<div class="info">
								{{auth()->user()->nama_karyawan}}
								<small>{{auth()->user()->M_Role->nama_role}}</small>
							</div>
						</a>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="{{route('dashboard')}}">
							<i class="fas fa-home"></i>
							<span>Dashboard</span>
						</a>
					</li>
					
					<li class="has-sub">
						<a href="calendar.html">
							<i class="far fa-credit-card"></i>
							<span>Pembayaran</span>
						</a>
					</li>
					
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="far fa-money-bill-alt"></i>
							<span>Keuangan</span>
							
						</a>
						<ul class="sub-menu">
							<li><a href="{{route('pos.index')}}">Pos Keuangan</a></li>
							<li><a href="{{route('jenis.index')}}">Jenis Pembayaran</a></li>
						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fas fa-th"></i>
							<span>Managemen Data</span>
						</a>
						<ul class="sub-menu">
							<li><a href="{{route('siswa.index')}}">Data Siswa</a></li>
							<li><a href="{{route('karyawan.index')}}">Data Karyawan</a></li>
							<li><a href="{{route('kelas.index')}}">Data Kelas</a></li>
							<li><a href="{{route('kompetensi.index')}}">Data Kompetensi</a></li>
							<li><a href="{{route('tahun_ajaran.index')}}">Data Tahun Ajaran</a></li>
							<li><a href="{{route('akses.index')}}">Data Hak Akses</a></li>
						</ul>
					</li>

					<li class="has-sub">
						<a href="calendar.html">
							<i class="fas fa-file-alt"></i>
							<span>Laporan</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="{{route('dashboard')}}">
							<i class="fas fa-info-circle"></i>
							<span>Identitas</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="calendar.html">
							<i class="fas fa-database"></i>
							<span>Pemeliharaan</span>
						</a>
					</li>
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin row -->
			@yield('content')
			<!-- end row -->
		</div>
		@include('layout._modal')
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('admin/assets/js/app.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/theme/material.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('vendor/sweetalert2/sweetalert2.all.min.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	@stack('js')
</body>

<!-- Mirrored from seantheme.com/color-admin/admin/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 11:22:32 GMT -->
</html>