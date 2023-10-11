<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('admin::resource.edit', ['resource' => trans('files::files.files')]))); ?>
    <?php $__env->slot('subtitle', $files->filename); ?>
    <li class="nav-item"><a href="<?php echo e(route('admin.files.index')); ?>"><?php echo e(clean(trans('files::files.files'))); ?></a></li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><?php echo e(clean(trans('admin::resource.edit', ['resource' => trans('files::files.files')]))); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
         <form method="POST" action="<?php echo e(route('admin.files.update', $files)); ?>" class="form-horizontal" id="user-edit-form" novalidate>
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('put')); ?>


            <?php echo $tabs->render(compact('files')); ?>

        </form> 
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/imagewiz/public_html/ww2.imagewiz.net/Lafum/Modules/Files/Resources/views/admin/files/edit.blade.php ENDPATH**/ ?>