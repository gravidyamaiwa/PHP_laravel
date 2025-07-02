@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-warning text-dark">
                <h5 class="card-title mb-0">
                    <i class="fas fa-edit"></i> Edit Data Mahasiswa
                </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">
                                    <i class="fas fa-user"></i> Nama Lengkap
                                </label>
                                <input type="text" 
                                       class="form-control @error('nama') is-invalid @enderror" 
                                       id="nama" 
                                       name="nama" 
                                       value="{{ old('nama', $mahasiswa->nama) }}" 
                                       placeholder="Masukkan nama lengkap"
                                       required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nim" class="form-label">
                                    <i class="fas fa-id-card"></i> NIM
                                </label>
                                <input type="text" 
                                       class="form-control @error('nim') is-invalid @enderror" 
                                       id="nim" 
                                       name="nim" 
                                       value="{{ old('nim', $mahasiswa->nim) }}" 
                                       placeholder="Masukkan NIM"
                                       required>
                                @error('nim')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">
                                    <i class="fas fa-graduation-cap"></i> Jurusan
                                </label>
                                <select class="form-select @error('jurusan') is-invalid @enderror" 
                                        id="jurusan" 
                                        name="jurusan" 
                                        required>
                                    <option value="">Pilih Jurusan</option>
                                    <option value="Teknik Informatika" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                                    <option value="Sistem Informasi" {{ old('jurusan', $mahasiswa->jurusan) == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                                    <option value="Teknik Komputer" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Komputer' ? 'selected' : '' }}>Teknik Komputer</option>
                                    <option value="Manajemen Informatika" {{ old('jurusan', $mahasiswa->jurusan) == 'Manajemen Informatika' ? 'selected' : '' }}>Manajemen Informatika</option>
                                </select>
                                @error('jurusan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope"></i> Email
                                </label>
                                <input type="email" 
                                       class="form-control @error('email') is-invalid @enderror" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email', $mahasiswa->email) }}" 
                                       placeholder="contoh@email.com"
                                       required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-sync-alt"></i> Update Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection