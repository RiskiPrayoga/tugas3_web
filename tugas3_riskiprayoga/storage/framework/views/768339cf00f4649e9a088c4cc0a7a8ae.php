<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Makanan</h1>

    <ul>
        <?php $__currentLoopData = $makanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $makanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src=<?php echo e($makanan->gambar); ?>

            width="100" />

            <li><?php echo e($makanan->nama); ?> - Rp. <?php echo e(number_format($makanan->harga)); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
        </ul>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>