

<?php $__env->startSection('title', 'Data Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 text-primary">
        <i class="fas fa-users"></i> Data Mahasiswa
    </h1>
    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-success">
        <i class="fas fa-plus"></i> Tambah Mahasiswa
    </a>
</div>

<div class="card">
    <div class="card-body">
        <?php if($mahasiswas->count() > 0): ?>
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
                        <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td class="fw-bold"><?php echo e($mhs->nama); ?></td>
                            <td>
                                <span class="badge bg-secondary"><?php echo e($mhs->nim); ?></span>
                            </td>
                            <td><?php echo e($mhs->jurusan); ?></td>
                            <td>
                                <a href="mailto:<?php echo e($mhs->email); ?>" class="text-decoration-none">
                                    <?php echo e($mhs->email); ?>

                                </a>
                            </td>
                            <td class="text-center">
                                <div class="btn-group-action">
                                    <a href="<?php echo e(route('mahasiswa.show', $mhs->id)); ?>" 
                                       class="btn btn-info btn-sm" title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="<?php echo e(route('mahasiswa.edit', $mhs->id)); ?>" 
                                       class="btn btn-warning btn-sm" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>" 
                                          method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" 
                                                title="Hapus"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data <?php echo e($mhs->nama); ?>?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada data mahasiswa</h5>
                <p class="text-muted">Klik tombol "Tambah Mahasiswa" untuk memulai.</p>
                <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Mahasiswa Pertama
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud-mahasiswa\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>