

<?php $__env->startSection('content'); ?>
<div class="container" id = "app">

</div>
<script>
    let year = <?php echo json_encode($year); ?>;
    let testing = <?php echo json_encode($testing); ?>;
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-react-app-master\resources\views/Transaction/transactions.blade.php ENDPATH**/ ?>