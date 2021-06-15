<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <?php echo $__env->yieldContent('css'); ?>

    <style>
        .btn-purple {
            background: #6a70fc;
            border: 1px solid #6a70fc;
            color: #fff;
        }

        .btn-purple:hover {
            background: #6a70fc;
            border: 1px solid #6a70fc;
            color: #fff;
        }
    </style>


    <link rel="stylesheet" href="app.css">

    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
    
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="mb-0">SI PENGRAKAT</h3>
                <p class="text-white mb-0">Pengaduan Masyarakat</p>
            </div>

            <ul class="list-unstyled components">
                <?php if(Auth::guard('admin')->user()->level == 'admin'): ?>
                <li class="<?php echo e(Request::is('admin/dashboard') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('dashboard.index')); ?>">Dashboard</a>
                </li>
                <li class="<?php echo e(Request::is('admin/pengaduan') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('pengaduan.index')); ?>">Pengaduan</a>
                </li>
                <li class="<?php echo e(Request::is('admin/petugas') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('petugas.index')); ?>">Petugas</a>
                </li>
                <li class="<?php echo e(Request::is('admin/masyarakat') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('masyarakat.index')); ?>">Masyarakat</a>
                </li>
                <li class="<?php echo e(Request::is('admin/laporan') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('laporan.index')); ?>">Laporan</a>
                </li>
                <?php elseif(Auth::guard('admin')->user()->level == 'petugas'): ?>
                <li class="<?php echo e(Request::is('admin/dashboard') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('dashboard.index')); ?>">Dashboard</a>
                </li>
                <li class="<?php echo e(Request::is('admin/pengaduan') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('pengaduan.index')); ?>">Pengaduan</a>
                </li>
                <?php endif; ?>
        </nav>


        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="ml-2"><?php echo $__env->yieldContent('header'); ?></div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <a href="<?php echo e(route('admin.logout')); ?>" class="btn btn-white btn-sm"><?php echo e(Auth::guard('admin')->user()->nama_petugas); ?></a>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

    </script>
        <?php echo $__env->yieldContent('js'); ?>
    </body>

</html>
<?php /**PATH C:\xampp\htdocs\pengaduan-masyarakat\resources\views/layouts/admin.blade.php ENDPATH**/ ?>