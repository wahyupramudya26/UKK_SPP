@extends('layout.main')
@section('title','Edit Pos Keuangan')
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
		<li class="breadcrumb-item active">Pos Keuangan</li>
	</ol>
	<h2 class="page-header">Data Pos Keuangan</h2>
	<!-- begin panel-body -->
	<div class="panel-body">
		<form action="{{route('pos.update',$pos->id_pos)}}" method="POST">
			{{@csrf_field()}}
			{{@method_field('PUT')}}
			<div class="form-group">
				<label for="">Nama Pos Keuangan</label>
				<input name="nama_pos" class="form-control {{$errors->has('nama_pos') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Nama Pos Keuangan" value="{{$pos->nama_pos}}"/>
			</div>

			<div class="form-group">
				<label for="">Keterangan</label>
				<input type="text" name="keterangan" class="form-control {{$errors->has('keterangan') ? 'is_invalid' : ''}} form-control-lg" placeholder="Masukan Keterangan" value="{{$pos->keterangan}}"/>
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