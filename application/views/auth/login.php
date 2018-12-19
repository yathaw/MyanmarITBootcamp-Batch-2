<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Bookstore</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>template/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="<?php echo site_url('authentication') ?>" method="POST">

            <?php if (isset($error_message)): ?>

              <div class="alert alert-dismissible alert-danger alertmessage">
                  <button class="close" type="button" data-dismiss="alert">×</button>
                  <strong>Try again!</strong> <br>
                  <?php echo $error_message; ?> 
                  <?php echo validation_errors(); ?>
              </div>

            <?php endif; ?>

            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus="autofocus" name="email">
                <label for="inputEmail">Email address</label>
              </div>
              <span style="color: red"> <?php echo form_error('email'); ?> </span>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
                <label for="inputPassword">Password</label>
              </div>
              <span style="color: red"> <?php echo form_error('password'); ?> </span>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Login">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>template/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
