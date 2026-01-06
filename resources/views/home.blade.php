@extends('layouts.backend.app')
@section('title', 'Home')
@section('content_title', 'Home')
@section('content')
	<x-alert></x-alert>
	<div class="row">
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
@endsection