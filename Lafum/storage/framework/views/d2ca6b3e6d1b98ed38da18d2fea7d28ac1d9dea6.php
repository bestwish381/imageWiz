

<?php $__env->startSection('content'); ?>
<div class="login">
  <div class="wrapper wrapper-login" style="padding:0px; display:flex">
    <?php echo $__env->make('user::admin.auth.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="layoutSidenav_content" style="height:calc(100vh - 62px); width:calc(100vw - 250px); overflow:auto; padding:20px">

    <body style="background-color:white;">

        <body class="sb-nav-fixed">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">

                    <div class="container">
                        <div class="row justify-content-center" style="display:flex; flex-direction: column;">
            
                            <center><b>
                                    <font face="Verdana" size="5" color="#000000">ImageWiz.net Free Counters</font>
                                </b></center></br>
                            <center>

                                <body>

                                    <center>
                                        <table cellpadding="0" cellspacing="0" style="width: 70%">
                                            <tbody>
                                                <tr>
                                                    <td><!--<b>ImageWiz.net Free Counters<br>-->
                                                        <p class="menu"><a href="<?php echo e(route('free_counters')); ?>">Counter Home</a> | <a
                                                                href="<?php echo e(route('count_login')); ?>">Counter Login</a> | <a
                                                                href="<?php echo e(route('count_register')); ?>">Counter Registration</a> | <a
                                                                href="<?php echo e(route('free_counters')); ?>"
                                                                onclick="javascript:window.open('http://ww2.imagewiz.net/counter/style.php','','height=500,width=475,resizable=yes,scrollbars=yes')">View
                                                                Counter Styles </a></p>
                                                        <hr>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <center></center>
                                        <center>
                                            <div class="col-sm-12 col-md-6" style="text-align:left">
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
                                                                <div style="position:relative">
                                                                    <input type="password" name="password" class="form-control" id="password">
                                                                
                                                                    <div style="position:absolute; right:20px; top:50%; transform:translateY(-50%);">
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
                                                                <div style="position:relative">
                                                                    <input type="password" name="password_confirmation" class="form-control" id="confirm-password">
                                                                    
                                                                    <div style="position:absolute; right:20px; top:50%; transform:translateY(-50%);">
                                                                        <i class="icon-eye"></i>
                                                                    </div>
                                                                </div>
                                                                
                                                                <?php if($errors->has('password_confirmation')): ?>
                                                                    <span class="help-block error"><?php echo e(clean($errors->first('password_confirmation'))); ?></span>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-action-d-flex mb-3">
                                                        
                                                        <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold" data-loading><?php echo e(clean(trans('user::auth.sign_up'))); ?></button>
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                        </center>
                                    </center>
                                    <div id="mttContainer" class="bootstrapiso notranslate" data-html="true"
                                        data-original-title="" title="" style="transform: translate(1230px, 100px);">
                                    </div>
                                </body>
                            </center>
                            <p>&nbsp;</p>
                            <div id="layoutAuthentication_footer">
                                <footer class="py-4 bg-light mt-auto">
                                    <div class="container-fluid px-4">
                                        <div>
                                            </p>
                                            <p align="center">
                                                <font face="Verdana"
                                                    style="font-size: 14pt; font-variant:small-caps; font-weight:700">
                                                    Copyright - 2002 - 2023</b>
                                                </font>
                                            </p>
                                        </div>
                                        <script>
                                            function onSubmit(token) {
                                                document.getElementById("demo-form").submit();
                                            }
                                        </script>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </div>
</div>
<?php $__env->stopSection(); ?>		
<?php echo $__env->make('user::admin.auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MyProject\imageWIZ\ww2.imagewiz.net\Lafum\Modules/User/Resources/views/admin/auth/countdowns/count_register/index.blade.php ENDPATH**/ ?>