@extends('layout.main')
@section('content')
	{{auth()->user()->M_Role->nama_role}}
@endsection


