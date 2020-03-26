@extends('layout.main')
@section('title','Edit Siswa')
@push('css')
<link href="{{asset('admin/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@endpush

@section('content')
@parent
<div class="col-xl-12 ui-sortable">
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Managemen Data</a></li>
		<li class="breadcrumb-item active">Siswa</li>
	</ol>
	<h2 class="page-header">Data Siswa</h2>
	<!-- begin panel-body -->
	<form action="{{route('siswa.update',$siswa->nisn)}}" method="POST" enctype="multipart/form-data">
		{{@csrf_field()}}
		{{@method_field('PUT')}}
		<div class="row">
			<div class="col-xl-8 ui-sortable">
				<div class="panel panel-inverse" data-sortable-id="form-stuff-2" data-init="true" style="">
					<!-- begin panel-heading -->
					<div class="panel-heading ui-sortable-handle">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<!-- end panel-heading -->
					<!-- begin panel-body -->
					<div class="panel-body">
						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">NISN</label>
							<div class="col-sm-9">
								<input type="text" name="nisn" class="form-control {{$errors->has('nisn') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan NISN" value="{{$siswa->nisn}}"/>
							</div>
						</div>

						<div class="form-group row m-b-15 align-items-center">
							<label class="col-sm-3 col-form-label">NIS</label>
							<div class="col-sm-9">
								<input type="text" name="nis" class="form-control {{$errors->has('nis') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan NIS" value="{{$nis[0]->nis}}" readonly />
							</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">Nama Lengkap</label>
							<div class="col-sm-9">
								<input type="text" name="nama_lengkap" class="form-control {{$errors->has('nama_lengkap') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Nama Lengkap" value="{{$siswa->nama_lengkap}}"/>
							</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">Alamat</label>
							<div class="col-sm-9">
								<textarea name="alamat" class="form-control" rows="3"></textarea>
							</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">No WhatsApp</label>
							<div class="col-sm-9">
								<input type="text" name="no_telp" class="form-control {{$errors->has('no_telp') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan No WhatsApp" value="{{old('no_telp')}}"/>
							</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">Tahun Ajaran</label>
							<div class="col-sm-9">
								<select class="form-control" name="id_tahun">
									<option selected value=" ">Pilih Tahun Ajaran</option>
									@foreach($tahun as $tahun_ajaran)
									<option value="{{$tahun_ajaran->id_tahun}}">{{$tahun_ajaran->tahun_ajaran}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">Kelas</label>
							<div class="col-sm-9">
								<select class="form-control" name="id_kelas">
									<option selected value=" ">Pilih Kelas Siswa</option>
									@foreach($kelas as $k)
									<option value="{{$k->id_kelas}}">{{$k->kelas}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">Username</label>
							<div class="col-sm-9">
								<input type="text" name="username" class="form-control {{$errors->has('username') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Username" value="{{old('username')}}"/>
							</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">Password</label>
							<div class="col-sm-9">
								<input type="password" name="password" class="form-control {{$errors->has('password') ? 'is_invalid' : ''}} form-control-lg" placeholder="Masukan Password" value="{{old('password')}}"/>
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">Konfirmasi Password</label>
							<div class="col-sm-9">
								<input type="password" class="form-control {{$errors->has('password_confirmation') ? 'is_invalid' : ''}} form-control-lg"  name="password_confirmation" placeholder="Konfirmasi Password Anda"/>
							</div>
						</div>

					</div>
					<!-- end panel-body -->
				</div>
			</div>

			<!-- BAGIAN KANAN -->
			<div class="col-xl-4 ui-sortable">
				<div class="panel panel-inverse" data-sortable-id="form-stuff-2" data-init="true" style="">
					<!-- begin panel-heading -->
					<div class="panel-heading ui-sortable-handle">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<!-- end panel-heading -->
					<!-- begin panel-body -->
					<div class="panel-body">
						<div class="form-group row m-b-15 align-items-center">
							<div class="col-sm-10">
								<img src="{{asset('images/'.$siswa->avatar)}}" alt="" style="max-height: 100%; max-width: 100%; float: right;">
							</div>
						</div>
						<div class="form-group row m-b-15 align-items-center">
							<label class="col-sm-3 col-form-label">Foto</label>
							<input type="file" name="avatar" class="form-control {{$errors->has('avatar') ? 'is_invalid' : ''}} form-control-lg" placeholder="Masukan No WhatsApp"/>
						</div>
						<div class="form-group row m-b-15 align-items-center">
							<div class="modal-footer">
								<button type="reset" class="btn btn-secondary">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</form>
				</div>
				<!-- end panel-body -->
			</div>
		</div>
	</div>
</div>
			<!-- <div class="form-group">
				<label for="">NISN</label>
				<input type="text" name="nisn" class="form-control {{$errors->has('nisn') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan NISN" value="{{old('nisn')}}"/>
			</div>

			<div class="form-group">
				<label for="">NIS</label>
				<input type="text" name="nis" class="form-control {{$errors->has('nis') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan NIS" value="{{old('nis')}}"/>
			</div>

			<div class="form-group">
				<label for="">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control {{$errors->has('nama_lengkap') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Nama Lengkap" value="{{old('nama_lengkap')}}"/>
			</div>

			<div class="form-group">
				<label for="alamat">Alamat</label>
				<br>
				<textarea name="alamat" id="alamat" cols="74" placeholder="Masukan Alamat"></textarea>
			</div>

			<div class="form-group">
				<label for="">No WhatsApp</label>
				<input type="text" name="no_telp" class="form-control {{$errors->has('no_telp') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan No WhatsApp" value="{{old('no_telp')}}"/>
			</div>

			<div class="form-group">
				<label for="">Foto</label>
				<input type="file" name="avatar" class="form-control {{$errors->has('avatar') ? 'is_invalid' : ''}} form-control-lg" placeholder="Masukan No WhatsApp" value="{{old('avatar')}}"/>
			</div>

			<div class="form-group">
				<label class="control-label">Kelas<span class="text-danger">*</span></label>
				<div class="row m-b-15">
					<div class="col-md-12">
						<select class="form-control" name="id_kelas">
							<option selected value="null">Pilih Kelas Siswa</option>
							@foreach($kelas as $k)
							<option value="{{$k->id_kelas}}">{{$k->nama_kelas}}</option>
							@endforeach
						</select>
					</div>
				</div>			
			</div>

			<div class="form-group">
				<label class="control-label">Tahun Ajaran<span class="text-danger">*</span></label>
				<div class="row m-b-15">
					<div class="col-md-12">
						<select class="form-control" name="id_tahun">
							<option selected value="null">Pilih Tahun Ajaran</option>
							@foreach($tahun as $tahun_ajaran)
							<option value="{{$tahun_ajaran->id_tahun}}">{{$tahun_ajaran->tahun_ajaran}}</option>
							@endforeach
						</select>
					</div>
				</div>			
			</div>

			<div class="form-group">
				<label for="">Username</label>
				<input type="text" name="username" class="form-control {{$errors->has('username') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Username" value="{{old('username')}}"/>
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="password" class="form-control {{$errors->has('password') ? 'is_invalid' : ''}} form-control-lg" placeholder="Masukan Password" value="{{old('password')}}"/>
			</div>

			<div class="modal-footer">
				<button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div> -->

			<!-- end panel-body -->


			@endsection

			@push('js')	
			<!-- ================== BEGIN PAGE LEVEL JS ================== -->
			<script src="{{asset('admin/assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
			<script src="{{asset('admin/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
			<script src="{{asset('admin/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
			<script src="{{asset('admin/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
			<script src="{{asset('admin/assets/js/demo/table-manage-combine.demo.js')}}"></script>
			<!-- ================== END PAGE LEVEL JS ================== -->
			@endpush