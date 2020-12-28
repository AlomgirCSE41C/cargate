<head>
    <title>Car Signup</title>
    <!-- Bootstrap Styles-->
    <link href="asset/dashboard/css/bootstrap.css" rel="stylesheet" />
    <link href="asset/dashboard/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      
      <h1>Car Gate</h1>
    </div>

    <!-- Login Form -->
    <form action="admin/admin_signup" method="post">
      <input type="text" id="login" class="fadeIn second" name="admin_name" placeholder="admin name" require>
      <input type="text" id="login" class="fadeIn second" name="admin_email" placeholder="Email" require>
      <input type="text" id="password" class="fadeIn third" name="admin_password" placeholder="password" require>
      <input type="submit" class="fadeIn fourth" value="Create">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?php echo base_url('admin');?>">BACK</a>
    </div>

  </div>
</div>

<!-- jQuery Js -->
<script src="asset/dashboard/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="asset/dashboard/js/bootstrap.min.js"></script>