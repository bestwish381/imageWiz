
        <?php echo e(Form::password('password', clean(trans('user::attributes.users.new_password')), $errors)); ?>

        <?php echo e(Form::password('password_confirmation', clean(trans('user::attributes.users.new_password_confirmation')), $errors)); ?>

        <hr>
        <div class="text-center">
        <h4><?php echo e(clean(trans('user::users.or_send_email'))); ?></h4>

        <a href="<?php echo e(route('admin.users.reset_password', $user)); ?>" class="btn btn-primary btn-reset-password" data-loading>
            <?php echo e(clean(trans('user::users.send_email'))); ?>

        </a>
        </div>
    <?php /**PATH /home/imagewiz/public_html/ww2.imagewiz.net/Lafum/Modules/User/Resources/views/admin/users/tabs/new_password.blade.php ENDPATH**/ ?>