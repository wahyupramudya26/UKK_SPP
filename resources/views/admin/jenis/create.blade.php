@extends('layout.main')
@section('title','Tambah Tarif Pembayaran')
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
		<li class="breadcrumb-item active">Tambah Tarif Pembayaran</li>
	</ol>
	<h2 class="page-header">Tambah Tarif Pembayaran</h2>
	<!-- begin panel-body -->
	<form action="{{route('update_tarif',$jenis->id_jenis)}}" method="POST">
		{{@csrf_field()}}
		{{@method_field('PUT')}}
		<div class="row">
			<div class="col-xl-5 ui-sortable">
				<div class="panel panel-inverse" data-sortable-id="form-stuff-2" data-init="true" style="">
					<!-- begin panel-heading -->
					<div class="panel-heading ui-sortable-handle">
						<h3 class="panel-title">Pilih Kelas</h3>
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
							<label class="col-sm-3 col-form-label">Nama Pembayaran</label>
							<div class="col-sm-9">
								<input type="text" name="nama_pembayaran" class="form-control {{$errors->has('nama_pembayaran') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Nama Pembayaran" value="{{$jenis->nama_pembayaran}}" readonly/>
							</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">Tahun Ajaran</label>
							<div class="col-sm-9">
								<input type="text" name="tahun_ajaran" class="form-control {{$errors->has('tahun_ajaran') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Nama Pembayaran" value="{{$jenis->getTahun->tahun_ajaran}}" readonly/>
							</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">Type Bayar</label>
							<div class="col-sm-9">
								<input type="text" name="type" class="form-control {{$errors->has('type') ? 'is_invalid' : ''}} form-control-lg" value="{{$jenis->tipe}}" readonly/>
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
					</div>
				</div>
				<div class="panel panel-inverse" data-sortable-id="form-stuff-2" data-init="true" style="">
					<!-- begin panel-heading -->
					<div class="panel-heading ui-sortable-handle">
						<h3 class="panel-title">Tarif Bulanan</h3>
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
							<label class="col-sm-3 col-form-label">Tarif Bulanan (Rp.)</label>
							<div class="col-sm-9">
								<input type="text" class="money" id="nominal" name="nominal" class="form-control {{$errors->has('nominal') ? 'is_invalid' : ''}} form-control-lg" placeholder="Masukan Nominal dan Tekan Enter" style="padding: 6px; width: 100%; border-radius: 5px;"/>
							</div>
						</div>
					</div>
					<!-- end panel-body -->
				</div>
			</div>

			<!-- BAGIAN KANAN -->
			@if($jenis->tipe == 'Bulanan')
			<div class="col-xl-7 ui-sortable">
				<div class="panel panel-inverse" data-sortable-id="form-stuff-2" data-init="true" style="">
					<!-- begin panel-heading -->
					<div class="panel-heading ui-sortable-handle">
						<h3 class="panel-title">Bulan</h3>
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
						<div id="result"></div>
						@foreach($bulan as $tarif_bulanan)
						<div class="form-group row m-b-15">
							<label class="col-sm-3 col-form-label">{{$tarif_bulanan}}</label>
							<div class="col-sm-9">
								<input type="text" id="bulan" name="bulan" class="form-control {{$errors->has('bulan') ? 'is_invalid' : ''}} form-control-lg"/>
							</div>
						</div>
						@endforeach
						<button type="SUBMIT" class="btn btn-primary btn-block">Save</button>
						<button type="Cancel" class="btn btn-grey btn-block">Cancel</button>
					</div>
					<!-- end panel-body -->
				</div>
			</div>
			@elseif($jenis->tipe == 'Bebas')
				<h1>Hello World</h1>
			@endif
		</div>
	</form>
</div>
@endsection

@push('js')
<script src="{{asset('admin/assets/js/jquery.mask.js')}}"></script>
<script>
	$('.money').mask("#.##0", {reverse: true});
	$("#nominal").change(function(){
	    $('input[name="bulan"]').val($(this).val());
	});
</script>
@endpush