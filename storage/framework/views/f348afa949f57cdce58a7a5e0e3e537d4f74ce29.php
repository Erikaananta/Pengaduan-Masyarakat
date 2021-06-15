

<?php $__env->startSection('title', 'Detail Masyarakat'); ?>
    
<?php $__env->startSection('css'); ?>
    <style>
        .text-primary:hover {
            text-decoration: underline;
        }

        .text-grey {
            color: #6c757d;
        }

        .text-grey:hover {
            color: #6c757d;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('masyarakat.index')); ?>" class="text-primary">Data Masyarakat</a>
    <a href="#" class="text-grey">/</a>
    <a href="#" class="text-grey">Detail Masyarakat</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        Detail Masyarakat
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>NIK</th>
                                <td>:</td>
                                <td><?php echo e($masyarakat->nik); ?></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td><?php echo e($masyarakat->nama); ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>:</td>
                                <td><?php echo e($masyarakat->username); ?></td>
                            </tr>
                            <tr>
                                <th>No Telp</th>
                                <td>:</td>
                                <td><?php echo e($masyarakat->telp); ?></td>
                            </tr>
                            <tr>
                                <th>Hapus Masyarakat</th>
                                <td>:</td>
                                <td>
                                    <form action="<?php echo e(route('masyarakat.destroy', $masyarakat->nik)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger" style="width: 100%" onclick="return confirm('APAKAH YAKIN?')">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <?php if(Session::has('notif')): ?>
                <div class="alert alert-danger">
                    <?php echo e(Session::get('notif')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan-masyarakat\resources\views/Admin/Masyarakat/show.blade.php ENDPATH**/ ?>