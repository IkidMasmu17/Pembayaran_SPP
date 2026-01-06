@extends('layouts.backend.app')
@section('title', 'Profile')
@section('content_title', 'User Profile')
@section('content')
<x-alert></x-alert>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <!-- Main Profile Card -->
        <div class="card shadow-lg border-0 overflow-hidden mb-5">
            <div class="profile-cover bg-theme" style="height: 120px;"></div>
            <div class="card-body p-0">
                <div class="text-center py-4">
                    <h2 class="profile-name">
                        @role('admin|petugas')
                            {{ Universe::petugas()->nama_petugas }}
                        @endrole
                        @role('siswa')
                            {{ Universe::siswa()->nama_siswa }}
                        @endrole
                    </h2>
                    <span class="badge badge-pill badge-light shadow-sm px-4 py-2 border text-uppercase" style="letter-spacing: 1px;">
                        <i class="fas fa-id-badge mr-1 text-theme"></i>
                        {{ Auth::user()->roles->pluck('name')->first() }}
                    </span>
                </div>

                <div class="row mt-4 px-lg-5 px-3 pb-5">
                    <div class="col-12 mb-4">
                        <h5 class="font-weight-bold text-theme border-bottom pb-2">
                            <i class="fas fa-user-circle mr-2"></i>Informasi Personal
                        </h5>
                    </div>
                    
                    @role('admin|petugas')
                    <div class="col-md-6 info-group">
                        <span class="info-label">NAMA LENGKAP</span>
                        <span class="info-value">{{ Universe::petugas()->nama_petugas }}</span>
                    </div>
                    <div class="col-md-6 info-group">
                        <span class="info-label">KODE PETUGAS</span>
                        <span class="info-value font-italic text-theme">{{ Universe::petugas()->kode_petugas }}</span>
                    </div>
                    <div class="col-md-6 info-group">
                        <span class="info-label">JENIS KELAMIN</span>
                        <span class="info-value">{{ Universe::petugas()->jenis_kelamin }}</span>
                    </div>
                    @endrole

                    @role('siswa')
                    <div class="col-md-6 info-group">
                        <span class="info-label">NAMA SISWA</span>
                        <span class="info-value">{{ Universe::siswa()->nama_siswa }}</span>
                    </div>
                    <div class="col-md-6 info-group">
                        <span class="info-label">NISN / NIS</span>
                        <span class="info-value">{{ Universe::siswa()->nisn }} / {{ Universe::siswa()->nis }}</span>
                    </div>
                    <div class="col-md-6 info-group">
                        <span class="info-label">KELAS</span>
                        <span class="info-value badge badge-soft-primary px-3">{{ Universe::siswa()->kelas->nama_kelas }}</span>
                    </div>
                    <div class="col-md-6 info-group">
                        <span class="info-label">JENIS KELAMIN</span>
                        <span class="info-value">{{ Universe::siswa()->jenis_kelamin }}</span>
                    </div>
                    <div class="col-md-12 info-group">
                        <span class="info-label">ALAMAT</span>
                        <span class="info-value">{{ Universe::siswa()->alamat }}</span>
                    </div>
                    @endrole

                    <div class="col-md-6 info-group">
                        <span class="info-label">USERNAME LOGIN</span>
                        <span class="info-value text-theme font-weight-bold">{{ Auth::user()->username }}</span>
                    </div>
                    @if(Auth::user()->email)
                    <div class="col-md-6 info-group">
                        <span class="info-label">ALAMAT EMAIL</span>
                        <span class="info-value">{{ Auth::user()->email }}</span>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Security Card -->
        <div class="card shadow-lg border-0 mb-5">
            <div class="card-header bg-white border-bottom-0 pt-4 px-4">
                <h5 class="card-title font-weight-bold mb-0">
                    <i class="fas fa-shield-alt mr-2 text-theme"></i>Keamanan Akun
                </h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="old_password" class="small font-weight-bold text-muted text-uppercase">Password Sekarang</label>
                            <div class="input-group border rounded shadow-sm overflow-hidden">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0"><i class="fas fa-lock text-muted"></i></span>
                                </div>
                                <input type="password" name="old_password" required id="old_password" class="form-control border-0" placeholder="••••••••">
                            </div>
                            @error('old_password')<span class="text-theme small font-weight-bold">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="new_password" class="small font-weight-bold text-muted text-uppercase">Password Baru</label>
                            <div class="input-group border rounded shadow-sm overflow-hidden">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0"><i class="fas fa-key text-muted"></i></span>
                                </div>
                                <input type="password" name="new_password" required id="new_password" class="form-control border-0" placeholder="••••••••">
                            </div>
                            @error('new_password')<span class="text-theme small font-weight-bold">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="text-right mt-3">
                        <button type="submit" class="btn bg-theme px-5 py-2 shadow-sm border-0 font-weight-bold">
                            <i class="fas fa-save mr-2"></i>SIMPAN PERUBAHAN
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="alert alert-light border-left shadow-sm p-4 mb-5" style="border-left: 5px solid var(--primary-color) !important;">
            <div class="d-flex align-items-center">
                <i class="fas fa-info-circle fa-2x text-theme mr-3"></i>
                <div>
                    <h6 class="font-weight-bold mb-1 text-theme">Informasi Penting!</h6>
                    <p class="mb-0 text-muted small">Password default sistem Anda adalah: <b class="text-dark">sppr2021</b>. Mohon segera ganti demi keamanan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection