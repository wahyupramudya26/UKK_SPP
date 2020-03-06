@extends('layout.main')
@section('title','Halaman Kelas')
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
		<li class="breadcrumb-item active">Kelas</li>
	</ol>
	<h2 class="page-header">Data Kelas</h2>
	<!-- begin panel-body -->
	<div class="panel-body">
		<div class="panel panel-inverse">
			<!-- begin panel-heading -->
			<div class="panel-heading">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
					[+] Tambah
				</button>
			</div>
		</div>
		<table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle">
			<thead>
				<tr>
					<th class="text-nowrap">No.</th>
					<th class="text-nowrap">Nama Kelas</th>
					<th class="text-nowrap">Kompetensi Kejuruan</th>
					<th class="text-nowrap" colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1?>
				@foreach($kelas as $kelas_siswa)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$kelas_siswa->nama_kelas}}</td>
					<td>{{$kelas_siswa->getKompetensi->kompetensi_kejuruan}}</td>
					<td>
						<a href="{{route('kelas.edit',$kelas_siswa->id_tahun)}}">
							<button class="btn btn-warning"><i class="fa fa-pencil-alt"></i></button>
						</a>
					</td>
					<td>
						<form action="{{route('kelas.destroy',$kelas_siswa->id_tahun)}}" method="post">
							{{@csrf_field()}}
							{{@method_field('DELETE')}}
							<button class="btn btn-danger" type="submit">
								<i class="fa fa-trash-alt"></i>
							</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- end panel-body -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Data Tahun Ajaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('tahun_ajaran.store')}}" method="POST">
					{{@csrf_field()}}
					<div class="form-group">
						<label for="">Tahun Ajaran</label>
						<input type="text" name="tahun_ajaran" class="form-control {{$errors->has('tahun_ajaran') ? 'is_invalid' : ''}} form-control-lg" type="text" name="tahun_ajaran" placeholder="Masukan Tahun Ajaran" value="{{old('tahun_ajaran')}}"/>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<div class="radio radio-css">
							<input type="radio" id="aktif" name="status" value="aktif" checked>
							<label for="aktif">Aktif</label><br/><br/>
							<input type="radio" id="tidak aktif" name="status" value="tidak aktif">
							<label for="tidak aktif">Tidak Aktif</label>
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