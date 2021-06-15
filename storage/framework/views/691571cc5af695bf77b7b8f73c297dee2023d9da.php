

<?php $__env->startSection('title', 'Halaman Dashboard'); ?>
    
<?php $__env->startSection('header', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header card-primary bg-primary">Petugas</div>
                <div class="card-body">
                    <div class="text-center">
                        <?php echo e($petugas); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header card-info bg-info">Masyarakat</div>
                <div class="card-body">
                    <div class="text-center">
                        <?php echo e($masyarakat); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header card-warning bg-warning">Pengaduan Proses</div>
                <div class="card-body">
                    <div class="text-center">
                        <?php echo e($proses); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header card-success bg-success">Pengaduan Selesai</div>
                <div class="card-body">
                    <div class="text-center">
                        <?php echo e($selesai); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan-masyarakat\resources\views/Admin/Dashboard/Index.blade.php ENDPATH**/ ?>