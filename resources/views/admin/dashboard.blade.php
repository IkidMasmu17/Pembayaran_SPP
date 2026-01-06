@extends('layouts.backend.app')
@section('title', 'Dashboard')

@push('css')
  <link rel="stylesheet" type="text/css"
    href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/chart.js/Chart.min.css">
@endpush

@section('content_title', 'Dashboard')
@section('content')
  <div class="row mb-4">
    <div class="col-lg">
      <div class="custom-jumbotron">
        @role('admin|petugas')
          <h1 class="display-4 font-weight-bold">Halo, {{ Universe::petugas()->nama_petugas }}!</h1>
        @endrole

        @role('siswa')
          <h1 class="display-4 font-weight-bold">Halo, {{ Universe::siswa()->nama_siswa }}!</h1>
        @endrole
        <p class="lead" style="font-weight: 500;">Selamat datang di Sistem Pembayaran SPP Modern.</p>
        <hr class="my-4" style="background-color: rgba(255,255,255,0.2);">
        <p>Kelola data pembayaran dengan lebih efisien dan modern.</p>
      </div>
    </div>
  </div>

  <!-- Modern Stats Section -->
  <div class="row">
    <div class="col-lg-3 col-6">
      <div class="stats-card">
        <div class="stats-icon icon-blue">
          <i class="fas fa-users"></i>
        </div>
        <div class="stats-info">
          <h3>{{ $total_siswa }}</h3>
          <p>Total Siswa</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <div class="stats-card">
        <div class="stats-icon icon-red">
          <i class="fas fa-school"></i>
        </div>
        <div class="stats-info">
          <h3>{{ $total_kelas }}</h3>
          <p>Total Kelas</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <div class="stats-card">
        <div class="stats-icon icon-green">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="stats-info">
          <h3>{{ $total_petugas }}</h3>
          <p>Total Petugas</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <div class="stats-card">
        <div class="stats-icon icon-orange">
          <i class="fas fa-user-secret"></i>
        </div>
        <div class="stats-info">
          <h3>{{ $total_admin }}</h3>
          <p>Total Admin</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card shadow-soft border-0" style="border-radius: 20px;">
        <div class="card-header bg-transparent border-0 pt-4 px-4">
          <h5 class="card-title font-weight-bold" style="color: #1e293b;">Statistik Siswa</h5>
          <p class="text-sm text-muted">Perbandingan jumlah siswa berdasarkan jenis kelamin</p>
        </div>
        <div class="card-body px-4 pb-4">
          <div class="chart-container-modern">
            <canvas id="canvas" height="300" style="max-height: 400px;"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script type="text/javascript"
    src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/chart.js/Chart.min.js"></script>
  <script>
    var ctx = document.getElementById("canvas").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Siswa Laki-laki", "Siswa Perempuan"],
        datasets: [{
          label: '',
          data: [
            {!! $siswa_laki_laki !!},
            {!! $siswa_perempuan !!},
          ],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>
@endpush