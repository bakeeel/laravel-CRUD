<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <?php echo $__env->yieldContent('main-content'); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\myapp\resources\views/layouts/content.blade.php ENDPATH**/ ?>