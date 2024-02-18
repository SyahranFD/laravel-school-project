@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <a href="/student/all">kembali</a>
    <h1>Edit Siswa</h1>
    <form method="post" action="/student/update/{{ $student->id }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis', $student->nis) }}" readonly>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $student->nama) }}">
        </div>
        <div class="mb-3">
            <label for="kelas">Kelas</label>
            <select class="form-select" name="kelas_id">
                @foreach ($kelas as $Kelas)
                    <option name="kelas_id" value="{{ $Kelas->id }}" {{ $Kelas->id == $student->kelas_id ? 'selected' : '' }}>{{ $Kelas->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $student->tanggal_lahir) }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $student->alamat) }}">
        </div>
        <button type="submit" class="btn btn-primary">Edit Siswa</button>
    </form>
@endsection
