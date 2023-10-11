<!DOCTYPE html>
<html lang="<?php echo e(locale()); ?>">
<head>
    <base href="<?php echo e(url('/')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title> <?php echo $__env->yieldContent('title'); ?> - <?php echo e(setting('site_name')); ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    
    <?php $__currentLoopData = $assets->allCss(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $css): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(v($css)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<?php echo $__env->make('admin::include.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</head>

<body>
	<div class="wrapper overlay-sidebar">
        <?php echo $__env->make('admin::include.header',['fullwidth'=>true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
		<div class="main-panel">
			<div class="content">
                <?php echo $__env->yieldContent('content'); ?>
			</div>
		</div>
		<?php echo $__env->yieldPushContent('more-actions'); ?>
	</div>
	
    <?php $__currentLoopData = $assets->allJs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $js): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script src="<?php echo e(v($js)); ?>"></script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <?php if(setting('custom_js',null,0)!=''): ?>
    <script>
        <?php echo setting('custom_js',null,0); ?>

    </script>
    <?php endif; ?>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
    
</body>
</html>
<?php /**PATH D:\MyProject\imageWIZ\ww2.imagewiz.net\Lafum\Modules/User/Resources/views/admin/auth/layout.blade.php ENDPATH**/ ?>