@extends('layouts.backend.app')
@section('title', 'Pembayaran')
@section('content_title', 'Pembayaran')
@section('content')
	<div class="row">
		<!-- Stats Section -->
		<div class="col-lg-12 mb-4">
			<div class="row">
				<div class="col-md-4">
					<div class="stats-card">
						<div class="stats-icon icon-blue">
							<i class="fas fa-hand-holding-usd"></i>
						</div>
						<div class="stats-info">
							<h3>{{ $pembayaran->count() }}</h3>
							<p>Total Transaksi</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="stats-card">
						<div class="stats-icon icon-green">
							<i class="fas fa-check-circle"></i>
						</div>
						<div class="stats-info">
							<h3>Rp {{ number_format($pembayaran->sum('jumlah_bayar'), 0, ',', '.') }}</h3>
							<p>Total Terbayar</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="stats-card">
						<div class="stats-icon icon-orange">
							<i class="fas fa-calendar-alt"></i>
						</div>
						<div class="stats-info">
							<h3>{{ date('Y') }}</h3>
							<p>Tahun Aktif</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Table Section -->
		<div class="col-lg-12">
			<div class="card border-0 shadow-sm" style="border-radius: 20px;">
				<div
					class="card-header bg-transparent border-0 pt-4 px-4 d-flex justify-content-between align-items-center">
					<div>
						<h5 class="card-title font-weight-bold mb-0" style="color: #1e293b;">Daftar Pembayaran SPP</h5>
						<p class="text-xs text-muted mb-0">Riwayat lengkap pembayaran Anda</p>
					</div>
				</div>
				<div class="card-body px-4 pb-4">
					<div class="table-responsive">
						<table id="pembayaranTable" class="table table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Bulan</th>
									<th>Tahun</th>
									<th>Tanggal Bayar</th>
									<th>Jumlah Bayar</th>
									<th>Petugas</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($pembayaran as $row)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td><span class="badge badge-light px-3 py-2"
												style="border-radius: 8px; color: var(--primary-color);">{{ $row->bulan_bayar }}</span>
										</td>
										<td class="font-weight-bold text-muted">{{ $row->tahun_bayar }}</td>
										<td>{{ \Carbon\Carbon::parse($row->tanggal_bayar)->format('d M Y') }}</td>
										<td class="font-weight-bold text-success">Rp
											{{ number_format($row->jumlah_bayar, 0, ',', '.') }}</td>
										<td>{{ $row->petugas->nama_petugas }}</td>
										<td>
											<span class="badge badge-success px-4 py-2" style="border-radius: 10px;">
												<i class="fas fa-check mr-1"></i> DIBAYAR
											</span>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('js')
	<script>
		$(function () {
			$('#pembayaranTable').DataTable({
				"paging": true,
				"lengthChange": true,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
				"language": {
					"search": "_INPUT_",
					"searchPlaceholder": "Cari data pembayaran...",
					"lengthMenu": "Tampilkan _MENU_ data",
					"info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
					"paginate": {
						"next": '<i class="fas fa-chevron-right"></i>',
						"previous": '<i class="fas fa-chevron-left"></i>'
					}
				}
			});
		});
	</script>
@endpush