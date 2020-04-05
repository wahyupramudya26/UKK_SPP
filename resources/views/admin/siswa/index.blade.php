@extends('layout.main')
@section('title','Halaman Siswa')
@push('css')
<link rel="stylesheet" href="{{asset('vendor/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/datatables/Responsive/css/responsive.dataTables.min.css')}}">
@endpush

@section('content')
@parent
<div class="col-xl-12 ui-sortable">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4 class="page-title">Data Siswa</h4>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahSiswa">
				<i class="fa fa-plus" aria-hidden="true"> Tambah</i>
			</button>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exportimport">
				<i class="fa fa-file-excel" aria-hidden="true"> Export/Import Siswa</i> 
			</button>
			<!-- Button trigger modal -->
		</div>	
		<!-- begin panel-body -->
		<div class="panel-body">
			<table id="datatable" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>NISN</th>
						<th>Nama Lengkap</th>
						<th>Kelas</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
	</div>
	
	<!-- end panel-body -->
</div>

<!-- Modal -->
<div class="modal fade" id="tambahSiswa" tabindex="-1" role="dialog" aria-labelledby="tambahSiswa" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahSiswa">Data Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('siswa.store')}}" method="POST">
					{{@csrf_field()}}
					<div class="form-group {{$errors->has('nisn') ? 'is_invalid' : ''}}">
						<label for="">NISN</label>
						<input type="text" name="nisn" class="form-control {{$errors->has('nisn') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan NISN" value="{{old('nisn')}}"/>
						@if($errors->has('nisn'))
						<div class="invalid-feedback">
							{{$errors->first('nisn')}}
						</div>
						@endif
					</div>

					<div class="form-group {{$errors->has('nama_lengkap') ? 'is_invalid' : ''}}">
						<label for="">Nama Lengkap</label>
						<input type="text" name="nama_lengkap" class="form-control {{$errors->has('nama_lengkap') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Nama Lengkap" value="{{old('nama_lengkap')}}"/>
						@if($errors->has('nama_lengkap'))
						<div class="invalid-feedback">
							{{$errors->first('nama_lengkap')}}
						</div>
						@endif
					</div>

					<div class="form-group {{$errors->has('id_kelas') ? 'is_invalid' : ''}}">
						<label class="control-label">Kelas<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<select class="form-control" name="id_kelas">
									<option selected value="null">Pilih Kelas Siswa</option>
									@foreach($kelas as $k)
									<option value="{{$k->id_kelas}}">{{$k->kelas}}</option>
									@endforeach
								</select>
								@if($errors->has('id_kelas'))
								<div class="invalid-feedback">
									{{$errors->first('id_kelas')}}
								</div>
								@endif
							</div>
						</div>			
					</div>

					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exportimport" tabindex="-1" role="dialog" aria-labelledby="export-import" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="export-import">Export/Import Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('siswa.import')}}" method="POST" enctype="multipart/form-data">
					{{@csrf_field()}}
					<div class="form-group">
						<a href="{{route('siswa.export')}}"class="btn btn-success"><i class="fa fa-download" aria-hidden="true"> <label>Export Data Siswa</label></i></a>
					</div>
					<div class="form-group">
						<label for="import">Import Data Siswa (.xls, .xlsx)</label>
						<input type="file" id="import" name="file" class="form-control {{$errors->has('nisn') ? 'is_invalid' : ''}} form-control-lg"/>
					</div>

					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Upload</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/datatables/Responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendor/datatables/DataTables/js/jquery.datatables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/datatables.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>	
<script>
	$('#datatable').DataTable({
		responsive:true,
		processing:true,
		serverSide:true,
		ajax:"{{route('table.siswa')}}",
		columns:[
			{data:'nisn',name:'nisn'},
			{data:'nama_lengkap',name:'nama_lengkap'},
			{data:'get_kelas.kelas',name:'kelas'},
			{data:'action',name:'action'}
		]
	});
</script>
@endsection