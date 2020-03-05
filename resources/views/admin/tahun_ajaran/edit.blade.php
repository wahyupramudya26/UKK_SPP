@extends('layout.main')
@section('title','Edit Tahun Ajaran')
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
		<li class="breadcrumb-item active">Tahun Ajaran</li>
	</ol>
	<h2 class="page-header">Data Tahun Ajaran</h2>
	<!-- begin panel-body -->
	<div class="panel-body">
		<form action="{{route('tahun_ajaran.update',$tahun_ajaran->id_tahun)}}" method="POST">
			{{@csrf_field()}}
			{{@method_field('PUT')}}
			<div class="form-group">
				<label for="">Tahun Ajaran</label>
				<input type="text" name="tahun_ajaran" class="form-control {{$errors->has('tahun_ajaran') ? 'is_invalid' : ''}} form-control-lg" type="text" name="tahun_ajaran" placeholder="Masukan Tahun Ajaran" value="{{ $tahun_ajaran->tahun_ajaran}}"/>
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<div class="radio radio-css">
					<input type="radio" id="aktif" name="status" value="aktif" >
					<label for="aktif">Aktif</label><br/><br/>
					<input type="radio" id="tidak aktif" name="status" value="tidak aktif">
					<label for="tidak aktif">Tidak Aktif</label>
				</div>
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