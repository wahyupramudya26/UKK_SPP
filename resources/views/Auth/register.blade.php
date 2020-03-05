<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/color-admin/admin/material/register_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 11:27:03 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Register Page</title>
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
	<style>
		background-color:blue !important;
	</style>
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
		<!-- begin register -->
		<div class="register register-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-15.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>Color</b> Admin App</h4>
					<p>
						As a Color Admin app administrator, you use the Color Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin register-header -->
				<h1 class="register-header">
					Sign Up
					<small>Create your Color Admin Account. It’s free and always will be.</small>
				</h1>
				<!-- end register-header -->
				<!-- begin register-content -->
				<div class="register-content">
					<form action="{{route('register')}}" method="POST" class="margin-bottom-0">
						{{@csrf_field()}}

						<label class="control-label">Username<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="text" class="form-control {{$errors->has('username') ? 'is_invalid' : ''}}" type="text" name="username" placeholder="Username Anda" value="{{old('username')}}"/>
							</div>
							@if($errors->has('username'))
							<div class="invalid-feedback">
								{{$errors->first('username')}}
							</div>
							@endif
						</div>

						<label class="control-label">Password<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="password" class="form-control {{$errors->has('password') ? 'is_invalid' : ''}}" name="password" placeholder="Password Anda"/>
							</div>
							@if($errors->has('password'))
							<div class="invalid-feedback">
								{{$errors->first('password')}}
							</div>
							@endif
						</div>

						<label class="control-label">Konfirmasi Password<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="password" class="form-control {{$errors->has('password_confirmation') ? 'is_invalid' : ''}}" name="password_confirmation" placeholder="Konfirmasi Password Anda"/>
							</div>
							@if($errors->has('password_confirmation'))
							<div class="invalid-feedback">
								{{$errors->first('password_confirmation')}}
							</div>
							@endif
						</div>

						<label class="control-label">Nama Karyawan<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="text" class="form-control {{$errors->has('nama_karyawan') ? 'is_invalid' : ''}}" type="text" name="nama_karyawan" placeholder="Nama Lengkap Anda" value="{{old('nama_karyawan')}}"/>
							</div>
							@if($errors->has('nama_karyawan'))
							<div class="invalid-feedback">
								{{$errors->first('nama_karyawan')}}
							</div>
							@endif
						</div>
						
						<label class="control-label">Hak Akses<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<select class="form-control" name="id_role">
									<option selected="" value="">Pilih Hak Akses Login</option>
									@foreach($role as $level)
										<option value="{{$level->id_role}}">{{$level->nama_role}}</option>
									@endforeach
								</select>
							</div>
						</div>									

						
						<div class="register-buttons">
							<button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
						</div>
						<div class="m-t-30 m-b-30 p-b-30">
							Already a member? Click <a href="{{route('login')}}">here</a> to login.
						</div>
					</form>
				</div>
				<!-- end register-content -->
			</div>
			<!-- end right-content -->
		</div>
		<!-- end register -->

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

<!-- Mirrored from seantheme.com/color-admin/admin/material/register_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 11:27:03 GMT -->
</html>

<!-- <form action="{{route('register')}}" method="POST">
	{{@csrf_field()}}
	<table>
		<tr>
			<td>
				<input class="form-control {{$errors->has('username') ? 'is_invalid' : ''}}" type="text" name="username" placeholder="Masukan USERNAME ANDA" value="{{old('username')}}">
			</td>
			<td>
				@if($errors->has('username'))
					<div class="invalid-feedback">
						{{$errors->first('username')}}
					</div>
				@endif
			</td>
		</tr>
		<tr>
			<td>
				<input class="form-control {{$errors->has('password') ? 'is_invalid' : ''}}" type="password" name="password" placeholder="masukan password anda">
			</td>
			<td>
				@if($errors->has('password'))
					<div class="invalid-feedback">
						{{$errors->first('password')}}
					</div>
				@endif
			</td>
		</tr>
		<tr>
			<td>
				<input class="form-control {{$errors->has('password_confirmation') ? 'is_invalid' : ''}}" type="password" name="password_confirmation" placeholder="Confirmasi Password Anda">
			</td>
			<td>
				@if($errors->has('password_confirmation'))
					<div class="invalid-feedback">
						{{$errors->first('password_confirmation')}}
					</div>
				@endif
			</td>
		</tr>
		<tr>
			<td>
				<input class=" form-control {{$errors->has('nama_karyawan') ? 'is_invalid' : ''}}" type="text" name="nama_karyawan" placeholder="Masukan Nama Lengkap Anda" value="{{old('nama_karyawan')}}">
			</td>
			<td>
				@if($errors->has('nama_karyawan'))
					<div class="invalid-feedback">
						{{$errors->first('nama_karyawan')}}
					</div>
				@endif
			</td>
		</tr>
		<tr>
			<td>	
				<select name="id_role">
						<option>--><!-- Pilih Hak Akses<--</option>
					@foreach($role as $r)
						<option value="{{$r->id_role}}">{{$r->nama_role}}</option>
					@endforeach
				</select>
			</td>
			<td> -->
				<!-- @if($errors->has('id_role'))
					<div class="invalid-feedback">
						{{$errors->first('id_role')}}
					</div>
					@endif -->
			<!-- </td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Register">	
			</td>
		</tr>
	</table>
</form> -->