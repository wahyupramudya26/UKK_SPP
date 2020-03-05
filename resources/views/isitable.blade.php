@extends('layout.main')
@section('content')
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
		<tr>
			<td>Nama Karyawan</td>
			<td>Nama Role</td>
		</tr>
		@foreach($role as $nama)
		<tr>
			<td>{{$nama->nama_petugas}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>		
@endsection