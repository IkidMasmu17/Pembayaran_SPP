@extends('layouts.backend.app')
@section('title', 'Laporan')
@section('content_title', 'Laporan')
@section('content')
	<x-alert></x-alert>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="custom-jumbotron"
				style="padding: 1.5rem 2.5rem; background: linear-gradient(135deg, #1e293b 0%, #334155 100%);">
				<h1 class="display-5 font-weight-bold mb-2" style="font-size: 2rem !important; color: white !important;">
					Laporan Pembayaran</h1>
				<p class="lead mb-0" style="font-size: 1rem !important; opacity: 0.9; color: white !important;">Pilih tahun
					ajaran untuk mencetak laporan resmi pembayaran SPP Anda.</p>
			</div>
		</div>

		<div class="col-lg-6 mx-auto">
			<div class="card border-0 shadow-soft" style="border-radius: 20px;">
				<div class="card-header bg-transparent border-0 pt-4 px-4 text-center">
					<h5 class="card-title font-weight-bold mb-0" style="color: #1e293b; float: none;">Cetak PDF</h5>
					<hr class="mt-3 mb-0"
						style="width: 50px; border-top: 3px solid var(--primary-color); border-radius: 3px;">
				</div>
				<div class="card-body p-5">
					<form method="POST" action="{{ route('siswa.laporan-pembayaran.print-pdf') }}">
						@csrf
						<div class="form-group mb-5">
							<label for="tahun_bayar"
								class="text-xs text-muted mb-2 uppercase tracking-wider font-bold">Tahun Ajaran</label>
							<select name="tahun_bayar" required=""
								class="form-control bg-light border-0 custom-select-modern" id="tahun_bayar"
								style="height: 55px; border-radius: 12px; font-weight: 500;">
								<option disabled="" selected="">- PILIH TAHUN -</option>
								@foreach($spp as $row)
									<option value="{{ $row->tahun }}">{{ $row->tahun }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group mb-0">
							<button type="submit" class="btn btn-primary btn-block shadow-lg"
								style="height: 55px; border-radius: 12px; font-weight: 700; letter-spacing: 0.5px;">
								<i class="fas fa-file-pdf mr-2"></i> GENERATE LAPORAN (PDF)
							</button>
						</div>
					</form>
				</div>
				<div class="card-footer bg-light border-0 py-4 px-5 text-center"
					style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
					<p class="text-xs text-muted mb-0">
						<i class="fas fa-info-circle mr-1"></i> Laporan akan diunduh secara otomatis setelah Anda menekan
						tombol di atas.
					</p>
				</div>
			</div>
		</div>
	</div>

	<style>
		.custom-select-modern {
			appearance: none;
			-webkit-appearance: none;
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%2364748b' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
			background-repeat: no-repeat;
			background-position: right 1.25rem center;
			background-size: 15px;
			padding-right: 3rem !important;
		}

		.custom-select-modern:focus {
			background-color: #fff !important;
			box-shadow: 0 0 0 0.2rem rgba(242, 107, 82, 0.1) !important;
		}
	</style>
@endsection