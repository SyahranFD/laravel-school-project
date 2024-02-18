@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <a href="/student/all">kembali</a>
    <h1>Detail Students {{ $student->nama }}</h1>
    <table class="table ">
      <thead class="table-success">
        <tr>
          <th scope="col">NIS</th>
          <th scope="col">Nama</th>
          <th scope="col">Kelas</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Alamat</th>
        </tr>
      </thead>
      <tbody class="table-group-divider table-light">
        <tr>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->kelas->nama }}</td>
            <td>{{ $student->tanggal_lahir }}</td>
            <td>{{ $student->alamat }}</td>
        </tr>
      </tbody>
    </table>
@endsection
