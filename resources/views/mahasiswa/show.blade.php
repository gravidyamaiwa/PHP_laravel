@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="card-title mb-0">
                    <i class="fas fa-user-circle"></i> Detail Mahasiswa
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="bg-light rounded p-4 mb-3">
                            <i class="fas fa-user-graduate fa-5x text-primary mb-3"></i>
                            <h5 class="text-primary">{{ $mahasiswa->nama }}</h5>
                            <span class="badge bg-secondary fs-6">{{ $mahasiswa->nim }}</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-bold text-muted" width="30%">
                                    <i class="fas fa-user"></i> Nama Lengkap
                                </td>
                                <td>: {{ $mahasiswa->nama }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">
                                    <i class="fas fa-id-card"></i> NIM
                                </td>
                                <td>: <span class="badge bg-secondary">{{ $mahasiswa->nim }}</span></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">
                                    <i class="fas fa-graduation-cap"></i> Jurusan
                                </td>
                                <td>: {{ $mahasiswa->jurusan }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">
                                    <i class="fas fa-envelope"></i> Email
                                </td>
                                <td>: <a href="mailto:{{ $mahasiswa->email }}" class="text-decoration-none">{{ $mahasiswa->email }}</a></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">
                                    <i class="fas fa-calendar-plus"></i> Terdaftar
                                </td>
                                <td>: {{ $mahasiswa->created_at->format('d F Y, H:i') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">
                                    <i class="fas fa-calendar-edit"></i> Terakhir Update
                                </td>
                                <td>: {{ $mahasiswa->updated_at->format('d F Y, H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <hr>
                
                <div class="d-flex justify-content-between">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <div>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit Data
                        </a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" 
                              method="POST" 
                              style="display:inline;" 
                              class="ms-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="btn btn-danger" 
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data {{ $mahasiswa->nama }}?')">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection