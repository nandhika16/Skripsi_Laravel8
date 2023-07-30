@extends('layouts.main')

@section('container')

<main>
    
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="gambar/Amertha.png" width="100%" height="100%" class="d-block w-100" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Slide 1">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> -->
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Amertha Bali Villas</h1>
            <p>Amertha Bali Villas adalah sebuah resor tepi pantai dengan pemandangan pegunungan, kebun, atau Teluk Pemuteran serta fasilitas kolam renang terbuka, spa, dan Wi-Fi gratis di seluruh areanya. Semua suite di Bali Amertha dilengkapi 
                dengan kasur santai, minibar, brankas, TV layar datar, dan kamar mandi dalam/luar ruangan.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Desa Pemuteran</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> -->
        <img src="gambar/Pura Melanting.png" width="100%" height="100%" class="d-block w-100" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Slide 1">
        <div class="container">
          <div class="carousel-caption">
            <h1>Pura Melanting</h1>
            <p>Pura Melanting terletak di desa Banyupoh, Kec. Grokgak, Kab. Buleleng, termasuk kawasan Bali Utara. Sekitar 50 km sebelah Barat kota Singaraja. Keberadaan pura ini Melanting tidak hanya sebagai tempat persembahyangan bagi umat Hindu terutama 
                para pedagang, tetapi juga wisatawan, karena pura di Bali ini tampil cantik dan indah.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Desa Banyupoh</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> -->
        <img src="gambar/Tanah Lot.png" width="100%" height="100%" class="d-block w-100" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Slide 1">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Tanah Lot</h1>
            <p>Pura Tanah Lot adalah salah satu Pura (Tempat Ibadah Umat Hindu) yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak 
                di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Kabupaten Tabanan</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <div class="container modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
        <h1 class="col-lg-12 mt-5 text-center">Masukkan Pencarian Lokasi Anda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-0">
      </div>
      <form action="/hasil" Method="post">
        @csrf
    <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
      <div class="row justify-content-center"> <!-- Menggunakan kelas 'justify-content-center' untuk mengatur posisi ke tengah -->
        <div class="col-lg-6"> <!-- Jangan gunakan kelas 'container' di sini -->
            <input class="form-control" name="lokasi" id="lokasi">
              <!-- <option></option> -->
          </div>
            <div class="col-lg-2">
              <button class="btn btn-success ml-0" type="submit">Cari Lokasi</button>
            </div>
      </div>
    </div>        
        <!-- <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
        <div class="row">
      <div class="container col-lg-8">
          <input type="text" class="form-control" name="lokasi" id="lokasi">
        </div>
      <div class="col-lg-2">
        <button class="btn btn-success ml-0" type="submit">Cari Lokasi</button>
      </div>
        </div>
      </div> -->
    <!-- </div>
  </div> -->

<div class="col-lg-12 mt-2">
    <h4>Rekomendasi Area Terdekat</h4>
    <div class="col-lg-12 mt-3">
        <h5>Hotel</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama </th>
                    <th>Alamat Area</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama Area Disini</td>
                    <td>Alamat Area Disini</td>
                    <td>Latitude</td>
                    <td>Longitude</td>
                    <td>Deskripsi</td>
                    <td>Harga</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="container px-4 py-5">
  <h2 class="pb-2 border-bottom container">Mengapa Menggunakan Website Sobat Backpacker ?</h2>
    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-4 py-3">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h3 class="fw-bold">Sobat Backpacker</h3>
        <p class="text-body-secondary">seseorang yang melakukan perjalanan dengan membawa seluruh barang bawaannya dalam sebuah ransel atau tas punggung. Para backpacker 
            biasanya melakukan perjalanan dengan gaya yang lebih mandiri, fleksibel, dan tergantung pada anggaran yang terbatas. Ciri khas utama dari seorang backpacker adalah 
            kemampuannya untuk mengemas semua barang kebutuhan dalam ransel yang nyaman dan ringan. Mereka sering berpindah-pindah dari satu tempat ke tempat lain, menggunakan berbagai sarana transportasi umum seperti bus, kereta api, pesawat, kapal feri, atau kadang berjalan kaki untuk menjelajahi tempat-tempat yang ingin mereka kunjungi.</p>
        <!-- <a href="#" class="btn btn-primary btn-lg">Primary button</a> -->
      </div>

      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#collection" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Hotel</h4>
            <p class="text-body-secondary">terdapat 110 data hotel di bali yang baru terdapat pada database.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#gear-fill" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Wisata</h4>
            <p class="text-body-secondary">Terdapat 96 data wisata di bali yang baru terdapat pada database.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#speedometer" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Souvenir</h4>
            <p class="text-body-secondary">Terdapat 20 data souvenir di bali yang baru terdapat pada database.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#table"/>
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Tempat Ibadah</h4>
            <p class="text-body-secondary">Terdapat 110 data Tempat Ibadah di bali yang baru terdapat pada database.</p>
          </div>
        </div>
      </main>
    
  <main>
  <h3 class="col-lg-12 mt-5 text-center">Explore more travel holidays in bali</h3>
      <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-5">
        <div class="col">
          <div class="card shadow-sm">
            <img src="gambar/Angel’s Billabong.jpg" width="100%" height="250" xmlns="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <div class="card-body">
              <h5 class="card-text">Wisata</h5>
              <p class="card-text">Pantai Angel's Billabong</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                </div>
                <!-- <small class="text-body-secondary">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="gambar/Viceroy Bali.jpeg" width="100%" height="250" xmlns="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <div class="card-body">
              <h5 class="card-text">Penginapan</h5>
              <p class="card-text">Villa Viceroy Bali</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                </div>
                <!-- <small class="text-body-secondary">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="gambar/pura tirta empul.jpeg" width="100%" height="250" xmlns="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <div class="card-body">
              <h5 class="card-text">Tempat Ibadah</h5>
              <p class="card-text">Pura Tirta Empul</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                </div>
                <!-- <small class="text-body-secondary">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="gambar/Krisna Oleh - Oleh Bali Nusa Indah.jpeg" width="100%" height="250" xmlns="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <div class="card-body">
              <h5 class="card-text">Souvenir</h5>
              <p class="card-text">Krisna Oleh-Oleh</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                </div>
                <!-- <small class="text-body-secondary">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="gambar/Villa.jpeg" width="100%" height="250" xmlns="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <div class="card-body">
              <h5 class="card-text">Penginapan</h5>
              <p class="card-text">Villa Seminyak</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                </div>
                <!-- <small class="text-body-secondary">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>

  <footer class="py-3 text-center text-body-secondary bg-dark">
    <h5 class="text-white">SobatBackpacker &copy;2023</h5>
      <p class="text-white">Informatika <i class="fas fa-info-circle"></i> by <a href="https://github.com/nandhika16">Github <i class="fab fa-github"></i></a></p>
      <p class="mt-0 text-white">
          Putu Nandhika Pratama Artana NPM. 19081010143
      </p>
</footer>

  <!-- <footer class="py-3 text-center text-body-secondary bg-dark">
  <h5 class="text-white">SobatBackpackerCopyright&copy;2023</h5>
    <p class="text-white">informatika</a> by <a href="https://github.com/nandhika16">Github</a>
  <p class="mt-0 text-white">
    Putu Nandhika Pratama Artana NPM. 19081010143
  </p>
</footer> -->
@endsection

@section('javascript')
<script>
  $(document).ready(function() {
        $('#lokasi').select2();
        getLokasi();
  });

  function getLokasi() {
    $.ajax({
      url: '{{url('get-lokasi')}}',
      type: 'GET',
      dataType: 'json',
      success: function(response) {
        // Handle the response data here
        if(response.status == 200) {
          $.each(response.data, function( index, value ) {
            // console.log(value)
            $('#lokasi').append(`
              <option value="${value.id}">${value.alamat}</option>
            `)
          });
        }
      },
      error: function(error) {
        // Handle errors here
        console.error('Error:', error);
      }
    });
  }

</script>
@endsection