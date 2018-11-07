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

    <title>Login - Admin</title>
</head>
<body>
<div class="container"><!-- Container Div Starts-->
    <div class="login_body">
        <div class="form_body">
            <span id="success_msg"> </span>
            <h2 class="login_heading">Login - Admin </h2>
            <form id="login_submit_form" action="<?php echo base_url('admin/login/'); ?>" method="post">
                <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url();?>">
                <div class="center_align grey_color bottom_padding red"><?php echo $this->session->flashdata('wrong_input');?></div>
                <div class="form-group">
                    <input type="text" name="uname" id="uname" class="form-control form_input" placeholder="Username">
                    <span id="uname_msg"> </span>
                </div>
                <div class="form-group">
                    <input type="password" id="password"  name="password" class="form-control form_input" placeholder="Password">
                    <span id="password_msg"> </span>
                </div>
                <div>
                    <input type="submit" value="Login" class="btn btn-info btn-block">
                </div>
<!--                <div class="center_align grey_color top_padding">-->
<!--                    <span>Not yet a member? <a href="--><?php //echo base_url('admin/signup');?><!--">Sign-up </a></span>-->
<!--                </div>-->
            </form>
        </div>
    </div>

</div><!-- Container Div Ends-->
</body>
</html>
