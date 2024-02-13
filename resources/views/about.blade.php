@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <h1>ini adalah halaman about</h1>
    <h3>nama : {{$nama}}</h3>
    <h3>kelas : {{$kelas}}</h3>
    <img src='{{$img}}' alt="img about" width="300">
@endsection