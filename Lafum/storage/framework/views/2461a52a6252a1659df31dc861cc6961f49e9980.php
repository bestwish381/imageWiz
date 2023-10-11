<?php echo e(Form::text('name', clean(trans('user::attributes.roles.name')), $errors, $role, ['required' => true])); ?>

<?php if($role->slug ?? false): ?>
    <?php echo e(Form::text('slug', clean(trans('user::attributes.roles.slug')), $errors, $role, ['required' => true])); ?>

<?php endif; ?>

    
<?php /**PATH /home/imagewiz/public_html/ww2.imagewiz.net/Lafum/Modules/User/Resources/views/admin/roles/tabs/general.blade.php ENDPATH**/ ?>