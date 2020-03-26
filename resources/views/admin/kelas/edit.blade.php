@extends('layout.main')
@section('title','Edit Kelas')
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
	<h2 class="page-header">Edit Data Kelas</h2>
	<!-- begin panel-body -->
	<div class="panel-body">
		<form action="{{route('kelas.update',$kelas->id_kelas)}}" method="POST">
			{{@csrf_field()}}
			{{@method_field('PUT')}}
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
						<div class="form-group field_wrapper">
							<label for="">Kelas</label>
							<input type="text" name="kelas" class="form-control {{$errors->has('kelas') ? 'is_invalid' : ''}} form-control-lg" placeholder="Masukan Kelas" value="{{$kelas->kelas}}"/>
							<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus" aria-hidden="true"> Tambah Nama Kelas</i> </a><br>
						</div>

						<div class="form-group">
							<label class="control-label">Kompetensi Keahlian<span class="text-danger">*</span></label>
							<div class="row m-b-15">
								<div class="col-md-12">
									<select class="form-control" name="id_kompetensi">
										<option selected="" value=" ">Pilih Kompetensi Keahlian</option>
										@foreach($kompetensi as $kompetensi_keahlian)
										<option value="{{$kompetensi_keahlian->id_kompetensi}}">{{$kompetensi_keahlian->kompetensi_keahlian}}</option>
										@endforeach
									</select>
								</div>
							</div>			
						</div>
						<div class="modal-footer">
							<button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- <div class="field_wrapper">
			<div>
				<input type="text" name="field_name[]" value=""/>
				<a href="javascript;" class="add_button" title="Add field">[+]</a>
			</div>
		</div> -->
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
<script type="text/javascript">
	$(document).ready(function(){
    var maxField = 2; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = `<br>
    <div class="form-group">
    <label for="">Nama Kelas</label>
    <input type="text" name="nama_kelas" class="form-control {{$errors->has('kelas') ? 'is_invalid' : ''}} form-control-lg" placeholder="Masukan Nama Kelas"/>
	</div>`; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
    	e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<!-- ================== END PAGE LEVEL JS ================== -->
@endpush