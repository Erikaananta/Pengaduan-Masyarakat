<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        
        <style>
            body {
                background: radial-gradient(circle, #3e48b5, #63a1e0);
            }

            .btn-purple {
                background: #63a1e0;
                width: 100%;
                color: #fff;
             }
        </style>

    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">SI PENGRAKAT</h2>
            <P class="text-center text-white mb-5">Pengaduan Masyarakat</P>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">LOGIN PETUGAS</h2>
                    <form action="<?php echo e(route('admin.login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                            <button type="submit" class="btn btn-purple">MASUK</button>
                    </form>
                </div>
            </div>
            <?php if(Session::has('pesan')): ?>
            <div class="alert alert-danger mt-2">
                <?php echo e(Session::get('pesan')); ?>

            </div>
            <?php endif; ?>
            <a href="<?php echo e(route('pekat.index')); ?>" class="btn btn-success text-white mt-3" style="width: 100%">Kembali ke Halaman Utama</a>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\pengaduan-masyarakat\resources\views/admin/login.blade.php ENDPATH**/ ?>