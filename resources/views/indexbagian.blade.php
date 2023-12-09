@extends('master4')
@section('judulhalaman','Data Bagian')
@section('konten')


	<h3>Data Bagian</h3>

	<a href="/bagian/tambahbagian" class="btn btn-primary"> + Tambah Bagian Baru</a>

	<H2>TABEL DATABASE</H2>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Bagian</th>
			<th>Nama Bagian</th>
			<th>Jumlah Bagian</th>
			<th>Tersedia?</th>
		</tr>
		@foreach($bagian as $b)
		<tr>
			<td>{{ $b->kodebagian }}</td>
			<td>{{ $b->namabagian }}</td>
			<td>{{ $b->jumlahbagian }}</td>
			<td>{{ $b->tersedia }}</td>

		</tr>
		@endforeach
	</table>
    {{$bagian->links()}}
@endsection
