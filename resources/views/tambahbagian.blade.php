@extends('master4')
@section('judulhalaman', 'Tambah Nilai')

@section('konten')
    <h3>Tambah Bagian</h3>

    <a href="/bagian" class="btn btn-success"> <- Kembali</a>

    <br/>
    <br/>

    <form action="/bagian/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="namabagian" class="col-sm-2 col-form-label">Nama Bagian</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="namabagian" name="namabagian">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlahbagian" class="col-sm-2 col-form-label">Jumlah Bagian</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="jumlahbagian" name="jumlahbagian">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia?</label>
            <div class="col-sm-4">
                <input type="text" class="tersedia" id="tersedia" name="tersedia">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
