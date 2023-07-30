@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowarp aling-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Souvenir</h1>
</div>
    <section class="content">
        <div class="container">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Souvenir di Bali</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/dashboard/souvenir">
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="nama">NAMA TEMPAT SOUVENIR</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Souvenir">
                    </div>
                    
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat">
                    </div>
                    
                    <div class="form-group">
                        <label for="latitude">LATITUDE</label>
                        <input type="text" name="latitude" class="form-control @error('latitude') is-invalid @enderror" id="latitude" placeholder="Masukkan Latitude">
                    </div>

                    <div class="form-group">
                        <label for="longitude">LONGITUDE</label>
                        <input type="longitude" name="longitude"de class="form-control @error('longitude') is-invalid @enderror" id="longitude" placeholder="Masukkan Longitude">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi" class="form-label">DESKRIPSI</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3" placeholder="Berikan Deskripsi"></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Jika sudah semua terisi silakan checklist!</label>
                    </div>
                <br>
                    <!-- Tombol Tambah Data -->
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection