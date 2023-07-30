@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowarp aling-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Wisata</h1>
</div>
    <section class="content">
        <div class="container">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Wisata di Bali</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ url('dashboard/wisata/'.$Wisatas->id)}}">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="nama">NAMA WISATA</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Wisata" value="{{ $Wisatas->nama }}">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" value="{{ $Wisatas->alamat }}">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="latitude">LATITUDE</label>
                        <input type="text" name="latitude" class="form-control @error('latitude') is-invalid @enderror" id="latitude" placeholder="Masukkan Latitude" value="{{ $Wisatas->latitude }}">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="longitude">LONGITUDE</label>
                        <input type="longitude" name="longitude" class="form-control @error('longitude') is-invalid @enderror" id="longitude" placeholder="Masukkan Longitude" value="{{ $Wisatas->longitude }}">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="harga">HARGA</label>
                        <input type="harga" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan harga" value="{{ $Wisatas->harga }}">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="deskripsi" class="form-label">DESKRIPSI</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3" placeholder="Berikan Deskripsi">{{ $Wisatas->deskripsi }}</textarea>
                    </div>
                <br>
                    <button type="submit" class="col-md btn btn-success">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection