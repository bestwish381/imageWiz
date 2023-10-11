<?php
$filename = $files->filename;
$without_extension = pathinfo($filename, PATHINFO_FILENAME);
$files->filename=$without_extension;
?> 
<?php echo e(Form::text('filename', clean(trans('files::files.form.name')), $errors, $files, ['required' => true])); ?>

<?php echo e(Form::textarea('description', trans('files::files.form.description'), $errors, $files, ['rows' => 10])); ?>




<?php /**PATH /home/imagewiz/public_html/ww2.imagewiz.net/Lafum/Modules/Files/Resources/views/admin/files/tabs/general.blade.php ENDPATH**/ ?>