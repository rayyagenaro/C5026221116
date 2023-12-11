@extends('master6')
@section('judulhalaman', 'Data Counter')

@section('konten')
<h3>Counter Website :</h3>

<h1> Anda telah membuka URL ini sebanyak {{ $counter->Jumlah }} kali </h1>
@endsection
