@extends('layout.main')
@section('title','Setting Tarif Pembayaran')

@section('content')
@parent
<div class="row">
	<div class="col-xl-12 ui-sortable">
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
		</div>
		<div class="form-group">
			<label for="">Kompetensi Keahlian</label>
			<input type="text" name="kompetensi" class="form-control {{$errors->has('kompetensi') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Kompetensi Keahlian" value="{{$jenis->getTahun->tahun_ajaran}}"/>
		</div>
	</div>
	
</div>
<!-- end panel-body -->
</div>
@endsection