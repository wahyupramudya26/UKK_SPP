@extends('layout.main')
@section('title','Halaman Jenis Pembayaran')
@push('css')
<link href="{{asset('admin/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<style>
	@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600");
	/* TOGGLE STYLING */
	.toggle {
		margin: 0 0 1.5rem;
		box-sizing: border-box;
		font-size: 0;
		display: -webkit-box;
		display: flex;
		-webkit-box-orient: horizontal;
		-webkit-box-direction: normal;
		flex-flow: row nowrap;
		-webkit-box-pack: start;
		justify-content: flex-start;
		-webkit-box-align: stretch;
		align-items: stretch;
	}
	.toggle input {
		width: 0;
		height: 0;
		position: absolute;
		left: -9999px;
	}
	.toggle input + label {
		margin: 0;
		padding: 10px 10px;
		box-sizing: border-box;
		position: relative;
		display: inline-block;
		border: solid 1px #DDD;
		background-color: #FFF;
		font-size: 12px;
		line-height: 140%;
		font-weight: 600;
		text-align: center;
		box-shadow: 0 0 0 rgba(255, 255, 255, 0);
		-webkit-transition: border-color .15s ease-out,  color .25s ease-out,  background-color .15s ease-out, box-shadow .15s ease-out;
		transition: border-color .15s ease-out,  color .25s ease-out,  background-color .15s ease-out, box-shadow .15s ease-out;
		/* ADD THESE PROPERTIES TO SWITCH FROM AUTO WIDTH TO FULL WIDTH */
		/*flex: 0 0 50%; display: flex; justify-content: center; align-items: center;*/
		/* ----- */
	}
	.toggle input + label:first-of-type {
		border-radius: 6px 0 0 6px;
		border-right: none;
	}
	.toggle input + label:last-of-type {
		border-radius: 0 6px 6px 0;
		border-left: none;
	}
	.toggle input:hover + label {
		border-color: #213140;
	}
	.toggle input:checked + label {
		background-color: #4B9DEA;
		color: #FFF;
		box-shadow: 0 0 10px rgba(102, 179, 251, 0.5);
		border-color: #4B9DEA;
		z-index: 1;
	}
	.toggle input:focus + label {
		outline: dotted 1px #CCC;
		outline-offset: .45rem;
	}
	@media (max-width: 40px) {
		.toggle input + label {
			padding: .10px .10px;
			-webkit-box-flex: 0;
			flex: 0 0 50%;
			display: -webkit-box;
			display: flex;
			-webkit-box-pack: center;
			justify-content: center;
			-webkit-box-align: center;
			align-items: center;
		}
	}
</style>
@endpush

@section('content')
@parent
<div class="col-xl-12 ui-sortable">
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Managemen Data</a></li>
		<li class="breadcrumb-item active">Jenis Pembayaran</li>
	</ol>
	<h2 class="page-header">Data Jenis Pembayaran</h2>
	<!-- begin panel-body -->
	<div class="panel-body">
		<div class="panel panel-inverse">
			<!-- begin panel-heading -->
			<div class="panel-heading">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
					<i class="fa fa-plus" aria-hidden="true"> Tambah</i> 
				</button>
			</div>
		</div>
		<table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle">
			<thead>
				<tr>
					<th class="text-nowrap">No.</th>
					<th class="text-nowrap">Nama Pos Keuangan</th>
					<th class="text-nowrap">Nama Pembayaran</th>
					<th class="text-nowrap">Tahun Ajaran</th>
					<th class="text-nowrap">Tarif Pembayaran</th>
					<th class="text-nowrap" colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1?>
				@foreach($jenis as $jenis_pembayaran)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$jenis_pembayaran->getPos->nama_pos}}</td>
					<td>{{$jenis_pembayaran->nama_pembayaran}}</td>
					<td>{{$jenis_pembayaran->getTahun->tahun_ajaran}}</td>
					<td>
						<a href="{{route('create_tarif',$jenis_pembayaran->id_jenis)}}">
							<button class="btn btn-primary btn-sm"><i class="fa fa-setting"> Setting Tarif Pembayaran</i></button>
						</a>
					</td>
					<td width="1%">
						<a href="{{route('jenis.edit',$jenis_pembayaran->id_jenis)}}">
							<button class="btn btn-warning"><i class="fa fa-pencil-alt"> Edit</i></button>
						</a>
					</td>
					<td width="1%">
						<form action="{{route('jenis.destroy',$jenis_pembayaran->id_jenis)}}" method="post">
							{{@csrf_field()}}
							{{@method_field('DELETE')}}
							<button class="btn btn-danger" type="submit">
								<i class="fa fa-trash-alt"> DELETE</i>
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
				<h5 class="modal-title" id="exampleModalLabel">Data Jenis Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('jenis.store')}}" method="POST">
					{{@csrf_field()}}
					<div class="form-group">
						<label class="control-label">Pos Keuangan<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<select class="form-control" name="id_pos">
									<option selected="" value=" ">Pilih Pos Keuangan</option>
									@foreach($pos as $pos)
									<option value="{{$pos->id_pos}}">{{$pos->nama_pos}}</option>
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
									<option selected="" value=" ">Pilih Tahun Ajaran</option>
									@foreach($tahun as $tahun)
									<option value="{{$tahun->id_tahun}}">{{$tahun->tahun_ajaran}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label">Nama Pembayaran<span class="text-danger">*</span></label>
						<input type="text" name="nama_pembayaran" class="form-control {{$errors->has('nama_pembayaran') ? 'is_invalid' : ''}} form-control-lg" name="nama_pembayaran" placeholder="Nama Pembayaran" value="{{old('nama_pembayaran')}}"/>
					</div>
					<div class="form-group">
						<label class="control-label">Type<span class="text-danger">*</span></label>
						<fieldset>
							<div class="toggle">
								<input type="radio" name="type" value="bulanan" id="sizeWeight" checked="checked" />
								<label for="sizeWeight">Bulanan</label>
								<input type="radio" name="type" value="bebas" id="sizeDimensions" />
								<label for="sizeDimensions">Bebas</label>
							</div>
						</fieldset>
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