@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <a class="btn btn-success" href="/student/all">Kembali</a>

    <div class="my-2">

    <h1>Detail Students {{ $student->nama }}</h1>

    <div class="my-4">
      
    <p>NIS : {{ $student->nis }}</p>
    <p>Nama : {{ $student->nama }}</p>
    <p>Kelas : {{ $student->kelas->nama }}</p>
    <p>Tanggal Lahir : {{ $student->tanggal_lahir }}</p>
    <p>Alamat : {{ $student->alamat }}</p>
  </div>
@endsection
