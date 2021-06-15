

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header', 'Data Pengaduan'); ?>

<?php $__env->startSection('content'); ?>
    <table id="pengaduanTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>NIK</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($k += 1); ?></td>
                <td><?php echo e($v->tgl_pengaduan->format('d-M-Y')); ?></td>
                <td><?php echo e($v->nik); ?></td>
                <td><?php echo e($v->isi_laporan); ?></td>
                <td>
                    <?php if($v->status == '0'): ?>
                        <a href="" class="badge badge-danger">-</a>
                    <?php elseif($v->status == 'proses'): ?>
                        <a href="" class="badge badge-warning text-white">Proses</a>
                    <?php else: ?>
                        <a href="" class="badge badge-success">Selesai</a>
                    <?php endif; ?>
                </td>
                <td><a href="<?php echo e(route('pengaduan.show', $v->id_pengaduan)); ?>" style="text-decoration: underline">Lihat</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pengaduanTable').DataTable();
        } );
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan-masyarakat\resources\views/Admin/Pengaduan/index.blade.php ENDPATH**/ ?>