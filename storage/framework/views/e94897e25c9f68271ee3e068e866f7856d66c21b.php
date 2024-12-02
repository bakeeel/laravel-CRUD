<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <h4 class="text-center py-3 bg-light ">
            Laravel 11 CRUD with upload image
        </h4>
        <div class="text-end mb-4">
            <a href="<?php echo e(route('user.create')); ?>" class="btn btn-info">New User</a>
        </div>
        <?php if(session('success')): ?>
            <div class="alert alert-success text-center">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger text-center">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-primary">
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($row->name); ?></td>
                            <td><?php echo e($row->email); ?></td>
                            <td>
                                <div class="showPhoto">
                                    <div id="imagePreview"
                                        style="<?php if($row->photo != ''): ?> background-image:url('<?php echo e(url('/')); ?>/uploads/<?php echo e($row->photo); ?>')<?php else: ?> background-image: url('<?php echo e(url('/img/avatar.png')); ?>') <?php endif; ?>;">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href=<?php echo e(route('user.edit', ['id' => $row->id])); ?> class="btn btn-primary"> Edit</a>
                                <button class="btn btn-danger"
                                    onClick="deleteFunction('<?php echo e($row->id); ?>')">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5">No Users Found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        function deleteFunction(id) {
            document.getElementById('delete_id').value = id;
            $("#modalDelete").modal('show');
        }
    </script>
<?php $__env->stopPush(); ?>

<style>
    .showPhoto {
        width: 51%;
        height: 54px;
        margin: auto;
    }

    .showPhoto>div {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>

<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myapp\resources\views/admin/index.blade.php ENDPATH**/ ?>