<?php echo e(Form::textarea('googleanalyticscode', trans('setting::attributes.googleanalyticscode'), $errors, $settings)); ?>

<?php echo e(Form::textarea('custom_js', trans('setting::attributes.custom_js'), $errors, $settings,['help'=>trans('setting::attributes.custom_js_help')])); ?>

<?php echo e(Form::textarea('custom_css', trans('setting::attributes.custom_css'), $errors, $settings,['help'=>trans('setting::attributes.custom_css_help')])); ?>

    
<?php /**PATH /home/imagewiz/public_html/ww2.imagewiz.net/Lafum/Modules/Setting/Resources/views/admin/settings/tabs/custom_js_css.blade.php ENDPATH**/ ?>