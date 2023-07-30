@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowarp aling-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Ibadah</h1>
</div>
    <section class="content">
        <div class="container">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Tempat Ibadah di Bali</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ url('dashboard/ibadah/'.$Ibadahs->id)}}">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="nama">NAMA IBADAH</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Ibadah" value="{{ $Ibadahs->nama }}">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" value="{{ $Ibadahs->alamat }}">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="latitude">LATITUDE</label>
                        <input type="text" name="latitude" class="form-control @error('latitude') is-invalid @enderror" id="latitude" placeholder="Masukkan Latitude" value="{{ $Ibadahs->latitude }}">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="longitude">LONGITUDE</label>
                        <input type="longitude" name="longitude" class="form-control @error('longitude') is-invalid @enderror" id="longitude" placeholder="Masukkan Longitude" value="{{ $Ibadahs->longitude }}">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="deskripsi" class="form-label">DESKRIPSI</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3" placeholder="Berikan Deskripsi">{{ $Ibadahs->deskripsi }}</textarea>
                    </div>
                <!-- Tombol Button -->
                <br>
                    <button type="submit" class="btn btn-success">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection