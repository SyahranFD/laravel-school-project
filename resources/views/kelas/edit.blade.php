@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <a href="/kelas/all">kembali</a>
    <h1>Edit Kelas</h1>
    <form method="post" action="/kelas/update/{{ $kelas->id }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $kelas->nama) }}">
        </div>
        <button type="submit" class="btn btn-primary">Edit Kelas</button>
    </form>
@endsection
