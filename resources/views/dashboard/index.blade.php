@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowarp aling-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
</div>    
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>110</h3>
                <p>Data Hotel</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>96</h3>
                <p>Data Wisata</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>19</h3>
                <p>Data Souvenir</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>110</h3>
                <p>Data Tempat Ibadah</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title text-bold">LAPORAN REKAP BULANAN</h5>
                
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  </button>
                  <div class="btn-group">
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Sobat Bali Backpacker Juli - Agustus, 2023</strong>
                        <canvas id="myChart"></canvas>
                      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                      <script>
                      // Ambil data untuk grafik dari backend atau ganti dengan data statis sesuai kebutuhan Anda
                      var chartData = {
                        labels: ['Hotels', 'Wisatas', 'Souvenirs', 'Ibadahs'],
                        datasets: [{
                            label: 'myChart',
                            data: [110, 96, 19, 110],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'
                            ],
                            borderWidth: 1
                        }]
                      };
                      </script>
                      </p>
                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                        </div>
                        <canvas id="myChart"></canvas>
                      </div>
                      <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Mitra Bali Backpacker</strong>
                    </p>
                    <div class="progress-group">
                      Data Hotel
                      <span class="float-right"><b>110</b>/300</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Data Tempat Ibadah
                      <span class="float-right"><b>110</b>/200</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 80%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Data Wisata</span>
                      <span class="float-right"><b>96</b>/200</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 55%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Data Souvenir
                      <span class="float-right"><b>19</b>/100</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 19%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-primary"><i class="fas fa-caret-up"></i> 80%</span>
                      <h5 class="description-header">110</h5>
                      <span class="description-text">Data Hotel</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-up"></i> 19%</span>
                      <h5 class="description-header">19</h5>
                      <span class="description-text">Data Souvenir</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 55%</span>
                      <h5 class="description-header">96</h5>
                      <span class="description-text">Data Wisata</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 80%</span>
                      <h5 class="description-header">110</h5>
                      <span class="description-text">Data Tempat Ibadah</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
@endsection