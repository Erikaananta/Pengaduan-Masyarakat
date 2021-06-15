

<?php $__env->startSection('title', 'Form Edit Petugas'); ?>
    
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
    <a href="<?php echo e(route('petugas.index')); ?>" class="text-primary">Data Petugas</a>
    <a href="#" class="text-grey">/</a>
    <a href="#" class="text-grey">Form Edit Petugas</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    Form Edit Petugas
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('petugas.update', $petugas->id_petugas)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <input type="text" value="<?php echo e($petugas->nama_petugas); ?>" name="nama_petugas" id="nama_petugas" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" value="<?php echo e($petugas->username); ?>" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telp</label>
                            <input type="number" value="<?php echo e($petugas->telp); ?>" name="telp" id="telp" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <div class="input-group mb-3">
                                <select name="level" id="level" class="custom-select">
                                    <?php if($petugas->level == 'admin'): ?>
                                    <option selected value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                    <?php else: ?>
                                    <option value="admin">Admin</option>
                                    <option selected value="petugas">Petugas</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning text-white" style="width: 100%">UPDATE</button>
                    </form>
                    <?php if($petugas->id_petugas != 1): ?>
                    <form action="<?php echo e(route('petugas.destroy', $petugas->id_petugas)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger mt-2" style="width: 100%" onclick="return confirm('APAKAH YAKIN?')">HAPUS</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <?php if(Session::has('notif')): ?>
                <div class="alert alert-danger">
                    <?php echo e(Session::get('notif')); ?>

                </div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger">
                    <?php echo e($error); ?>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan-masyarakat\resources\views/Admin/Petugas/edit.blade.php ENDPATH**/ ?>