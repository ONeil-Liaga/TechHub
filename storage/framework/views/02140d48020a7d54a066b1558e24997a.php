<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo e(!empty($meta_title) ? $meta_title : ''); ?></title>

    <?php if(!empty($meta_description)): ?>
    <meta name="description" content="<?php echo e($meta_description); ?>">
    <?php endif; ?>

    <?php if(!empty($meta_keywords)): ?>
    <meta name="keywords" content="<?php echo e($meta_keywords); ?>">
    <?php endif; ?>

    <?php
        $getSystemSettingApp = App\Models\SystemSettingModel::getSingle();
    ?>

    <link rel="shortcut icon" href="<?php echo e($getSystemSettingApp->getFevicon()); ?>">


    <link rel="stylesheet" href="<?php echo e(url('../assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('../assets/css/plugins/owl-carousel/owl.carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('../assets/css/plugins/magnific-popup/magnific-popup.css')); ?>">


    <link rel="stylesheet" href="<?php echo e(url('../assets/css/style.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>
    <style type="text/css">
        .btn-wishlist-add::before {
            content: '\f233' !important;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">


        <?php echo $__env->make('home._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('home._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    </div>
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div>

     <?php echo $__env->make('home._mobile_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                  <form action="" id="SubmitFormLogin" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="form-group">
                                            <label for="singin-email">Email Address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="password" required>
                                        </div>

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="is_remember" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div>

                                            <a href="<?php echo e(url('forgot-password')); ?>" class="forgot-link">Forgot Your Password?</a>
                                        </div>
                                    </form>

                                </div>
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="" id="SubmitFormRegister" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="form-group">
                                            <label for="register-name">Name <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="register-name" name="name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="register-email">Email address <span style="color:red">*</span></label>
                                            <input type="email" class="form-control" id="register-email" name="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="register-password">Password <span style="color:red">*</span></label>
                                            <input type="password" class="form-control" id="register-password" name="password" required>
                                        </div>

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo e(url('../assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('../assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('../assets/js/jquery.hoverIntent.min.js')); ?>"></script>
    <script src="<?php echo e(url('../assets/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(url('../assets/js/superfish.min.js')); ?>"></script>
    <script src="<?php echo e(url('../assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(url('../assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>

    <script src="<?php echo e(url('../assets/js/main.js')); ?>"></script>

    <script type="text/javascript">


        $('body').delegate('#SubmitFormLogin', 'submit', function(e){
            e.preventDefault();
            $.ajax({
                type : "POST",
                url : "<?php echo e(url('auth_login')); ?>",
                data : $(this).serialize(),
                dataType : "json",
                success: function(data)
                {
                   if(data.status == true)
                   {
                        location.reload();
                   }
                   else
                   {
                        alert(data.message);
                   }
                },
                error: function (data) {

                }
            });
        });

        $('body').delegate('#SubmitFormRegister', 'submit', function(e){
            e.preventDefault();
            $.ajax({
                type : "POST",
                url : "<?php echo e(url('auth_register')); ?>",
                data : $(this).serialize(),
                dataType : "json",
                success: function(data)
                {
                   alert(data.message);

                   if(data.status == true)
                   {
                        location.reload();
                   }
                },
                error: function (data) {

                }
            });
        });


        $('body').delegate('.add_to_wishlist', 'click', function(e){
            var product_id = $(this).attr('id');
            $.ajax({
                type : "POST",
                url : "<?php echo e(url('add_to_wishlist')); ?>",
                data:{
                   "_token": "<?php echo e(csrf_token()); ?>",
                   product_id:product_id,
                },
                dataType : "json",
                success: function(data) {
                    if(data.is_wishlist == 0)
                    {
                        $('.add_to_wishlist'+product_id).removeClass('btn-wishlist-add');
                    }
                    else
                    {
                        $('.add_to_wishlist'+product_id).addClass('btn-wishlist-add');
                    }
                }
            });
        });

    </script>

</body>


</html>
<?php /**PATH D:\TechHub\resources\views/home/app.blade.php ENDPATH**/ ?>