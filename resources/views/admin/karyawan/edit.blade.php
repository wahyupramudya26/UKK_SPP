@extends('layout.main')
@section('title','Edit Karyawan')
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
		<li class="breadcrumb-item active">Karyawan</li>
	</ol>
	<h2 class="page-header">Data Karyawan</h2>
	<!-- begin panel-body -->
	<div class="panel-body">
		<form action="{{route('karyawan.update',$karyawan->id_karyawan)}}" method="POST" enctype="multipart/form-data">
			{{@csrf_field()}}
			{{@method_field('PUT')}}
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" name="username" class="form-control {{$errors->has('username') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Username" value="{{ $karyawan->username}}"/>
			</div>
			<div class="form-group">
				<label for="">Nama Karyawan</label>
				<input type="text" name="nama_karyawan" class="form-control {{$errors->has('nama_karyawan') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Nama Karyawan" value="{{ $karyawan->nama_karyawan}}"/>
			</div>
			<div class="form-group">
				<label for="">Foto Karyawan</label><br/>
				<img src="{{asset('images/'.$karyawan->avatar)}}" style="max-width: 70px; max-height: 70px;">
				<input type="file" name="avatar" class="form-control {{$errors->has('avatar') ? 'is_invalid' : ''}} form-control-lg"/>
			</div>
			<div class="form-group">
			<label class="control-label">Hak Akses<span class="text-danger">*</span></label>
				<select class="form-control" name="id_role">
					<option selected value="null">Pilih Hak Akses Login</option>
					@foreach($role as $level)
						<option value="{{$level->id_role}}" @if($level->id_role == $level->id_role) selected @endif>{{$level->nama_role}}</option>
					@endforeach
				</select>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</div>
	<!-- end panel-body -->
</div>


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