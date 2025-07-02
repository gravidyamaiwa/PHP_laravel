

<?php $__env->startSection('title', 'Detail Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
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
                            <h5 class="text-primary"><?php echo e($mahasiswa->nama); ?></h5>
                            <span class="badge bg-secondary fs-6"><?php echo e($mahasiswa->nim); ?></span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-bold text-muted" width="30%">
                                    <i class="fas fa-user"></i> Nama Lengkap
                                </td>
                                <td>: <?php echo e($mahasiswa->nama); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">
                                    <i class="fas fa-id-card"></i> NIM
                                </td>
                                <td>: <span class="badge bg-secondary"><?php echo e($mahasiswa->nim); ?></span></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">
                                    <i class="fas fa-graduation-cap"></i> Jurusan
                                </td>
                                <td>: <?php echo e($mahasiswa->jurusan); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">
                                    <i class="fas fa-envelope"></i> Email
                                </td>
                                <td>: <a href="mailto:<?php echo e($mahasiswa->email); ?>" class="text-decoration-none"><?php echo e($mahasiswa->email); ?></a></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">
                                    <i class="fas fa-calendar-plus"></i> Terdaftar
                                </td>
                                <td>: <?php echo e($mahasiswa->created_at->format('d F Y, H:i')); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">
                                    <i class="fas fa-calendar-edit"></i> Terakhir Update
                                </td>
                                <td>: <?php echo e($mahasiswa->updated_at->format('d F Y, H:i')); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <hr>
                
                <div class="d-flex justify-content-between">
                    <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <div>
                        <a href="<?php echo e(route('mahasiswa.edit', $mahasiswa->id)); ?>" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit Data
                        </a>
                        <form action="<?php echo e(route('mahasiswa.destroy', $mahasiswa->id)); ?>" 
                              method="POST" 
                              style="display:inline;" 
                              class="ms-2">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" 
                                    class="btn btn-danger" 
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data <?php echo e($mahasiswa->nama); ?>?')">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud-mahasiswa\resources\views/mahasiswa/show.blade.php ENDPATH**/ ?>