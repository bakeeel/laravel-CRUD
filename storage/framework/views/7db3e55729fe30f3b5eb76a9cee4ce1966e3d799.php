<?php $__env->startSection('main-content'); ?>
    <div class="container text-center">
        <div class="col-md-12">
            <div class="form-appl">
                <h3 class="text-center py-3 bg-secondary"><?php echo e($title); ?></h3>
                <form class="form1" method="post"
                    action="<?php if(isset($edit->id)): ?> <?php echo e(route('user.update', ['id' => $edit->id])); ?><?php else: ?><?php echo e(route('user.store')); ?> <?php endif; ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group col-md-12 mb-3">
                        <label for="">Your Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter Your Name"
                            value="<?php if(isset($edit->id)): ?> <?php echo e($edit->name); ?><?php else: ?> <?php echo e(old('name')); ?> <?php endif; ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group col-md-12 mb-3">
                        <label for="">Your Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Enter Your Email"
                            value="<?php if(isset($edit->id)): ?> <?php echo e($edit->email); ?><?php else: ?> <?php echo e(old('email')); ?> <?php endif; ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div><h6><label for="">Photo</label></h6>
                    <div class="form-group col-md-12 mb-5">

                        <div class="avatar-upload mb-5-1">
                            <div>
                                <input type='file' id="imageUpload" name="photo" accept=".png, .jpg, .jpeg"
                                    onchange="previewImage(this)" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                    style="<?php if(isset($edit->id) && $edit->photo != ''): ?> background-image:url('<?php echo e(url('/')); ?>/uploads/<?php echo e($edit->photo); ?>')<?php else: ?> background-image: url('<?php echo e(url('/img/avatar.png')); ?>') <?php endif; ?>">
                                </div>
                            </div>
                        </div>
                        <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a class="btn btn-danger" href="<?php echo e(route('user.index')); ?>">Cancel</a>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#imagePreview").css('background-image', 'url(' + e.target.result + ')');
                    $("#imagePreview").hide();
                    $("#imagePreview").fadeIn(700);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
<?php $__env->stopPush(); ?>
<style>
    .mb-5 {
        display: flex;
        /* Enable Flexbox */
        justify-content: center;
        /* Horizontally center */
        align-items: center;
        /* Vertically center */

        /* Make the container take full height of the viewport */
    }

    .avatar-upload {
        position: relative;
        max-width: 205px;
    }

    .avatar-upload .avatar-preview {
        width: 67%;
        height: 147px;
        position: relative;
        border-radius: 3%;
        border: 6px solid #F8F8F8;
    }

    .avatar-upload .avatar-preview>div {
        width: 100%;
        height: 100%;
        border-radius: 3%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>

<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myapp\resources\views/admin/add_edit_user.blade.php ENDPATH**/ ?>