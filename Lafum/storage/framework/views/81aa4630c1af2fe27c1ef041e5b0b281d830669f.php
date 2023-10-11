<div class="avatar-holder">
    <?php if($file->isImage()): ?>
        <img src="<?php echo e($file->path); ?>">
    <?php else: ?>
        <i class="file-icon fa <?php echo e($file->icon()); ?>"></i>
    <?php endif; ?>
</div><?php /**PATH D:\MyProject\imageWIZ\ww2.imagewiz.net\Lafum\Modules/Admin/Resources/views/include/table/thumbnail.blade.php ENDPATH**/ ?>