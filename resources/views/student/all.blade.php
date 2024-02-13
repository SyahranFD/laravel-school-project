@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <h1>Data Siswa</h1>
    <a type="button" class="my-3 btn btn-primary" href="/student/create">Tambah</a>
    
    @if (session('success'))
    <div class="my-3 alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <table class="table ">
      <thead class="table-secondary">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">NIS</th>
          <th scope="col">Nama</th>
          <th scope="col">Kelas</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="table-group-divider table-light">
        @foreach ($students as $key => $student)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->kelas->nama }}</td>
            <td style="display: flex; gap: 10px;">
              <a type="button" class="btn btn-primary" href="/student/detail/{{ $student->id }}">Detail</a>
              <a type="button" class="btn btn-warning" href="/student/edit/{{ $student->id }}">Edit</a>
              <form action="/student/delete/{{ $student->id }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                @method('delete')
                @csrf
                <button class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection
