@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 text-primary">
        <i class="fas fa-users"></i> Data Mahasiswa
    </h1>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">
        <i class="fas fa-plus"></i> Tambah Mahasiswa
    </a>
</div>

<div class="card">
    <div class="card-body">
        @if($mahasiswas->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">
                                <i class="fas fa-user"></i> Nama
                            </th>
                            <th scope="col">
                                <i class="fas fa-id-card"></i> NIM
                            </th>
                            <th scope="col">
                                <i class="fas fa-graduation-cap"></i> Jurusan
                            </th>
                            <th scope="col">
                                <i class="fas fa-envelope"></i> Email
                            </th>
                            <th scope="col" class="text-center">
                                <i class="fas fa-cogs"></i> Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswas as $index => $mhs)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="fw-bold">{{ $mhs->nama }}</td>
                            <td>
                                <span class="badge bg-secondary">{{ $mhs->nim }}</span>
                            </td>
                            <td>{{ $mhs->jurusan }}</td>
                            <td>
                                <a href="mailto:{{ $mhs->email }}" class="text-decoration-none">
                                    {{ $mhs->email }}
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="btn-group-action">
                                    <a href="{{ route('mahasiswa.show', $mhs->id) }}" 
                                       class="btn btn-info btn-sm" title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('mahasiswa.edit', $mhs->id) }}" 
                                       class="btn btn-warning btn-sm" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" 
                                          method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" 
                                                title="Hapus"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data {{ $mhs->nama }}?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada data mahasiswa</h5>
                <p class="text-muted">Klik tombol "Tambah Mahasiswa" untuk memulai.</p>
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Mahasiswa Pertama
                </a>
            </div>
        @endif
    </div>
</div>
@endsection