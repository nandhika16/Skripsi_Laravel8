@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowarp aling-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Wisata</h1>
</div>
<a href="/dashboard/wisata/create" class="btn btn-success mb-3">Tambah Data</a>

    @if(session()->has('success'))
        <div class="alert alert-primary col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

<form method="post" action="/dashboard/wisata">
    <div class="table-responsive col-lg-12">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAMA</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">LATITUDE</th>
            <th scope="col">LONGITUDE</th>
            <th scope="col">HARGA</th>
            <th scope="col">DESKRIPSI</th>
            <th scope="col">ACTION</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($wisatas as $Wisatas)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $Wisatas->nama }}</td>
            <td>{{ $Wisatas->alamat }}</td>
            <td>{{ $Wisatas->latitude }}</td>
            <td>{{ $Wisatas->longitude }}</td>
            <td>{{ $Wisatas->harga}}</td>
            <td>{{ $Wisatas->deskripsi }}</td>
            <td>
                <a href="{{ url('dashboard/wisata/'.$Wisatas->id)}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="{{ url('dashboard/wisata/'.$Wisatas->id)}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span data-feather="x-circle"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</form>
@endsection