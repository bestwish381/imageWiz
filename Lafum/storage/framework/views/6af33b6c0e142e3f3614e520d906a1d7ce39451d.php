<div class="file-action">
<?php if(setting('enable_file_download')): ?>
<a href="<?php echo e(route('admin.files.download',$download_key)); ?>"><i class="fas fa-download"></i></a>
<?php endif; ?>
<?php if(setting('enable_file_preview')): ?>
    <?php if($file->extension=='pdf'): ?> 
        <a href="<?php echo e($file->path); ?>" data-fancybox="gallery" data-caption="<?php echo e($file->filename); ?>" data-type="iframe"  ><i class="fas fa-eye"></i></a>
    <?php elseif($file->extension=='docx'): ?> 
		<a  href="javascript:void(0);" data-src="https://docs.google.com/gview?embedded=true&amp;url=<?php echo e($file->path); ?>" data-fancybox="gallery" data-caption="<?php echo e($file->filename); ?>" data-type="iframe"  ><i class="fas fa-eye"></i></a>
    <?php elseif($file->isImage()): ?> 
        <a href="<?php echo e($file->path); ?>" class="fancybox" data-fancybox="gallery" data-caption="<?php echo e($file->filename); ?>" ><i class="fas fa-eye"></i></a>
    <?php elseif($file->isVideo()): ?> 
        <a data-fancybox="gallery" href="<?php echo e($file->path); ?>" data-caption="<?php echo e($file->filename); ?>"   data-width="640" data-height="360" ><i class="fas fa-eye"></i></a>
    <?php else: ?>
        <a href="<?php echo e(route('admin.files.download',$download_key)); ?>"><i class="fas fa-eye"></i></a>
    <?php endif; ?>
<?php endif; ?>
<?php if($file->description!=''): ?>
    <a href="#" title="<?php echo e(clean(trans('files::files.form.description'))); ?>" data-toggle="modal" data-target="#desc-<?php echo e($file->id); ?>"><i class="fas fa-info-circle"></i></a>
    
    <div class="modal fade" id="desc-<?php echo e($file->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(clean(trans('files::files.form.description'))); ?> | <?php echo e($file->filename); ?> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <?php echo e($file->description); ?>

                </div>
                
            </div>
        </div>
    </div>  
    
<?php endif; ?> 
<?php if ($currentUser->hasAccess('admin.files.destroy')) : ?>
    <?php if(auth()->user()->isAdmin()): ?>
        <a href="#" class="btn-fileDelete" data-id="<?php echo e($file->id); ?>" ><i class="far fa-times-circle"></i></a>
    <?php else: ?>
        <?php if(auth()->user()->id==$file->user_id || setting('delete_assign_folder_files')): ?>
            <a href="#" class="btn-fileDelete" data-id="<?php echo e($file->id); ?>" ><i class="far fa-times-circle"></i></a>
        <?php endif; ?>       
    <?php endif; ?>      
<?php endif; ?> 
</div>     





<?php /**PATH /home/imagewiz/public_html/ww2.imagewiz.net/Lafum/Modules/Files/Resources/views/admin/files/include/table-action.blade.php ENDPATH**/ ?>