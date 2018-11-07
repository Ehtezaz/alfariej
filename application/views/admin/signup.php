<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Adding Style-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/admin.css">

    <!-- Adding JavaScript-->
    <script src="<?php echo base_url(); ?>assets/js/my_jquery.js"></script>

    <title>Sign Up - Admin</title>
</head>
<body>
<div class="container"><!-- Container Div Starts-->
    <div class="login_body"><!-- login_body Starts-->
        <div class="form_body"><!-- form_body Starts -->
            <div style="text-align: center;"><span id="success_msg" ></span></div>
            <h2 class="login_heading">Sign Up - Admin </h2>
            <form id="users_submit_form" action="<?php echo base_url('users/add'); ?>" method="post" autocomplete="on">

                <!-- user-name form-group Start-->
                <div class="form-group">
                    <input type="text" id="uname" name="uname" class="form-control" placeholder="User Name" />
                    <span id="uname_msg"> </span>
                </div><!--user-email  form-group Ends-->

                <!--user-email form-group Start-->
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" />
                    <span id="email_msg"> </span>
                </div><!-- form-group -->

                <!-- user-password form-group Start -->
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                    <span id="password_msg"> </span>
                </div><!-- form-group Start -->

                <input type="submit" id="users_submit_button" class="btn btn-info btn-block" />
            </form>
            <div class="center_align top_padding">
                Already have an account?
                <a href="<?php echo base_url('admin/signin');?>" class="tx-info">
                    Sign In
                </a>
            </div>
        </div><!-- form_body Ends-->
    </div><!-- login_body Ends-->

</div><!-- Container Div Ends-->
</body>
</html>