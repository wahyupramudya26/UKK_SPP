@extends('layout.main')
@push('css')
<link href="{{asset('admin/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/assets/plugins/datatables.net-autofill-bs4/css/autofill.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/assets/plugins/datatables.net-colreorder-bs4/css/colreorder.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/assets/plugins/datatables.net-keytable-bs4/css/keytable.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/assets/plugins/datatables.net-rowreorder-bs4/css/rowreorder.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/assets/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}" rel="stylesheet" />
@endpush

@section('content')
<div class="col-xl-12 ui-sortable">
	<h1 class="page-header">Managed Tables - Extension Combination <small>header small text goes here...</small></h1>
		<!-- begin panel-body -->
		<div class="panel-body">
			<table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle">
				<thead>
					<tr>
						<th width="1%"></th>
						<th width="1%" data-orderable="false"></th>
						<th class="text-nowrap">Rendering engine</th>
						<th class="text-nowrap">Browser</th>
						<th class="text-nowrap">Platform(s)</th>
						<th class="text-nowrap">Engine version</th>
						<th class="text-nowrap">CSS grade</th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td width="1%" class="f-s-600 text-inverse">1</td>
						<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
						<td>Trident</td>
						<td>Internet Explorer 4.0</td>
						<td>Win 95+</td>
						<td>4</td>
						<td>X</td>
					</tr>
					<tr class="gradeC">
						<td width="1%" class="f-s-600 text-inverse">55</td>
						<td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
						<td>Misc</td>
						<td>IE Mobile</td>
						<td>Windows Mobile 6</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr class="gradeC">
						<td width="1%" class="f-s-600 text-inverse">57</td>
						<td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr class="gradeU">
						<td width="1%" class="f-s-600 text-inverse">58</td>
						<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
						<td>Other browsers</td>
						<td>All others</td>
						<td>-</td>
						<td>-</td>
						<td>U</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- end panel-body -->
	</div>

</div>
@endsection

@push('js')	
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('admin/assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-autofill/js/dataTables.autofill.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-autofill-bs4/js/autofill.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-colreorder/js/dataTables.colreorder.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-colreorder-bs4/js/colreorder.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-keytable/js/dataTables.keytable.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-keytable-bs4/js/keytable.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-rowreorder/js/dataTables.rowreorder.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-rowreorder-bs4/js/rowreorder.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('admin/assets/js/demo/table-manage-combine.demo.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
@endpush