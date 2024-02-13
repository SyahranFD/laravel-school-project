@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <a href="/kelas/all">kembali</a>
    <h1>Tambah Kelas</h1>
    <form method="post" action="/kelas/add">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kelas</button>
    </form>
@endsection
