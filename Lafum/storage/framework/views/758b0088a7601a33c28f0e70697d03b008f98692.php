<!DOCTYPE html>
<html lang="en" style="-ms-text-size-adjust: 100%;
                    -webkit-text-size-adjust: 100%;
                    -webkit-print-color-adjust: exact;"
>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet">
    </head>

    <body style="font-family: 'Open Sans', sans-serif;
                font-size: 15px;
                min-width: 320px;
                margin: 0;"
    >
        <table style="border-collapse: collapse; width: 100%;">
            <tbody>
                <tr>
                    <td style="padding: 0;">
                        <table style="border-collapse: collapse; width: 100%;">
                            <tbody>
                                <tr>
                                    <td align="center" style="background: #1a2035">
                                        <?php if(is_null($logo)): ?>
                                            <h5 style="font-size: 30px;
                                                    line-height: 36px;
                                                    margin: 0;
                                                    padding: 30px 15px;
                                                    text-align: center;"
                                            >
                                                <a href="<?php echo e(route('admin.dashboard.index')); ?>" style="font-family: 'Open Sans', sans-serif;
                                                                                    font-weight: 400;
                                                                                    color: #ffffff;
                                                                                    text-decoration: none;"
                                                >
                                                    <?php echo e(setting('site_name')); ?>

                                                </a>
                                            </h5>
                                        <?php else: ?>
                                            <div style="display: flex;
                                                        height: 64px;
                                                        width: 200px;
                                                        padding: 16px 15px;
                                                        align-items: center;"
                                            >
                                                <img src="<?php echo e($logo); ?>" style="max-height: 100%; max-width: 100%;">
                                            </div>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 40px 15px;">
                        <table style="border-collapse: collapse;
                                    min-width: 320px;
                                    max-width: 600px;
                                    width: 100%;
                                    margin: auto;"
                        >
                            <?php if(isset($heading)): ?>
                                <tr>
                                    <td style="padding: 0;">
                                        <h4 style="font-family: 'Open Sans', sans-serif;
                                                font-weight: 400;
                                                font-size: 21px;
                                                line-height: 26px;
                                                margin: 0 0 15px;
                                                color: #555555;"
                                        >
                                            <?php echo e($heading); ?>

                                        </h4>
                                    </td>
                                </tr>
                            <?php endif; ?>

                            <tr>
                                <td style="padding: 0;">
                                    <span style="font-family: 'Open Sans', sans-serif;
                                                font-weight: 400;
                                                font-size: 16px;
                                                line-height: 26px;
                                                color: #666666;
                                                display: block;"
                                    >
                                        <?php echo e($text); ?>

                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td align="center" style="padding: 15px 0; background: #f1f3f7;">
                        <span style="font-family: 'Open Sans', sans-serif;
                                    font-weight: 400;
                                    font-size: 16px;
                                    line-height: 26px;
                                    display: inline-block;
                                    color: #555555;
                                    padding: 0 15px;"
                        >
                            © <?php echo e(date('Y')); ?>

                            <a target="_blank" href="<?php echo e(route('admin.dashboard.index')); ?>" style="text-decoration: none; color: #31629f;">
                                <?php echo e(setting('site_name')); ?>.
                            </a>
                            <?php echo e(trans('user::mail.all_rights_reserved')); ?>

                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
<?php /**PATH /home/imagewiz/public_html/ww2.imagewiz.net/Lafum/Modules/User/Resources/views/admin/emails/text.blade.php ENDPATH**/ ?>