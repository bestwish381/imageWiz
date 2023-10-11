<?php $__env->startSection('title', clean(trans('user::auth.sign_up'))); ?>

<?php $__env->startSection('content'); ?>
<div class="login" style="overflow:hidden;">
    <div class="wrapper wrapper-login" style="padding: 0px; justify-content:unset">
        <?php echo $__env->make('user::admin.auth.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container container-signup">
            <?php echo $__env->make('admin::include.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <h3 class="text-center"><?php echo e(clean(trans('user::auth.sign_up'))); ?></h3>
            <div class="login-form">
                <form method="POST" action="<?php echo e(route('admin.register.post')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('first_name') ? 'has-error': ''); ?>">
                                <label for="first-name"><?php echo e(clean(trans('user::auth.first_name'))); ?> <span class="required-label">*</span></label>

                                <input type="text" name="first_name" value="<?php echo e(old('first_name')); ?>" class="form-control" id="first-name" autofocus>
                                <?php if($errors->has('first_name')): ?>
                                    <span class="help-block error"><?php echo e(clean($errors->first('first_name'))); ?></span>
                                <?php endif; ?>
                            
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('last_name') ? 'has-error': ''); ?>">
                                <label for="last-name"><?php echo e(clean(trans('user::auth.last_name'))); ?> <span class="required-label">*</span></label>

                                <input type="text" name="last_name" value="<?php echo e(old('last_name')); ?>" class="form-control" id="last-name">

                                <?php if($errors->has('last_name')): ?>
                                    <span class="help-block error"><?php echo e(clean($errors->first('last_name'))); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group <?php echo e($errors->has('email') ? 'has-error': ''); ?>">
                                <label for="email"><?php echo e(clean(trans('user::auth.email'))); ?> <span class="required-label">*</span></label>

                                <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="email">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block error"><?php echo e(clean($errors->first('email'))); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('password') ? 'has-error': ''); ?>">
                                <label for="password"><?php echo e(clean(trans('user::auth.password'))); ?> <span class="required-label">*</span></label>
                                <div class="position-relative">
                                    <input type="password" name="password" class="form-control" id="password">
                                
                                    <div class="show-password">
                                        <i class="icon-eye"></i>
                                    </div>
                                </div>
                                
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block error"><?php echo e(clean($errors->first('password'))); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('password_confirmation') ? 'has-error': ''); ?>">
                                <label for="confirm-password"><?php echo e(clean(trans('user::auth.password_confirmation'))); ?> <span class="required-label">*</span></label>
                                <div class="position-relative">
                                    <input type="password" name="password_confirmation" class="form-control" id="confirm-password">
                                    
                                    <div class="show-password">
                                        <i class="icon-eye"></i>
                                    </div>
                                </div>
                                
                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block error"><?php echo e(clean($errors->first('password_confirmation'))); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row form-action">
                        <div class="col-md-4">
                            <a href="<?php echo e(route('admin.login')); ?>" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold"><?php echo e(clean(trans('user::auth.cancel'))); ?></a>
                        </div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary float-right mt-3 mt-sm-0 fw-bold" data-loading><?php echo e(clean(trans('user::auth.sign_up'))); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::admin.auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MyProject\imageWIZ\ww2.imagewiz.net\Lafum\Modules/User/Resources/views/admin/auth/register.blade.php ENDPATH**/ ?>