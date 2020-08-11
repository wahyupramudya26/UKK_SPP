@extends('layout.main')
@section('title','Setting Tarif Pembayaran')

@section('content')
@parent

<div class="row">
	<h3>Tarif Pembayaran</h3>
	<div class="col-xl-12 ui-sortable">
		<div class="panel panel-inverse" data-sortable-id="form-stuff-2" data-init="true" style="">
			<!-- begin panel-heading -->
			<div class="panel-heading ui-sortable-handle">
				<h2 class="panel-title">{{$jenis->nama_pembayaran}}</h2>
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
				<h4 class="panel-title" style="padding:5px 5px;">{{$jenis->nama_pembayaran}}</h4>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-5">
						<div class="form-group row">
							<label for="tahun" class="col-sm-4 col-form-label" readonly>Tahun Ajaran</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="tahun" value="{{$jenis->getTahun->tahun_ajaran}}" readonly>
							</div>
						</div>
					</div>
					<div class="col-1"></div>
					<div class="col-3"><form action="{{route('setting',$jenis->id_jenis)}}" method="GET">
						<div class="form-group row">
							<label for="inputState" class="col-sm-4 col-form-label">Kelas</label>
							<div class="col-sm-8">
								<select id="inputState" class="form-control" name="cari">
									<option selected>Pilih Kelas</option>
									@foreach($kelas as $k)
									<option value="{{$k->id_kelas}}">{{$k->kelas}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group row">
							<div class="col-sm-12">
								<button type="submit" class="btn btn-success"><i class="fas fa-search"> Cari dan Tampilkan</i></button>
							</div>
						</div>
					</div></form>
				</div>
				<hr/>
				<div class="row">
					<div class="col-1" style="margin-left: 25px">
						<label class="col-sm-4 col-form-label">Aksi</label>
					</div>
					<div class="col-2"></div>
					<div class="col-4">
						<div class="form-row">
							<div class="col">
								<a href="{{route('create_tarif',$jenis->id_jenis)}}">
									<button type="submit" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"> Tambah Data</i></button>
								</a>
								<button type="submit" class="btn btn-default"><i class="fas fa-redo" aria-hidden="true"> Kembali</i></button>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="col-xl-12 ui-sortable">
		<div class="panel panel-inverse" data-sortable-id="form-stuff-2" data-init="true" style="">
			<!-- begin panel-heading -->
			<div class="panel-heading ui-sortable-handle">
				<h2 class="panel-title">Data Siswa</h2>
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
				<table id="data-table-combine" class="table table-striped table-td-valign-middle">
					<thead>
						<tr>
							<th class="text-nowrap">#</th>
							<th class="text-nowrap">No</th>
							<th class="text-nowrap">NISN</th>
							<th class="text-nowrap">Nama Lengkap</th>
							<th class="text-nowrap">Kelas</th>
						</tr>
					</thead>
					<tbody>

						<?php $no = 1?>
						@foreach($siswa as $siswa_kelas)
						<tr>
							<td>#</td>
							<td>{{$no++}}</td>
							<td>{{$siswa_kelas->nisn}}</td>
							<td>{{$siswa_kelas->nama_lengkap}}</td>
							<td>{{$siswa_kelas->getKelas->kelas}}</td>
						</tr>
						@endforeach
						</tbody>
					</table>				
				</div>
			</div>
		</div>
	</div>
	@endsection