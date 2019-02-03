<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/logincss.css">
</head>

<body class="loginbody">

 <div class="col-lg-8 col-lg-offset-2">
    <h1 style="color: #000099; font-size: 36px; font-family: arial black" align="center">Welcome To Our Site</h1>
    <p align="center" style="margin-top: 30px; font-size: 24px;">Please fill data to login!!!</p>
      
    <?php if(isset($_SESSION['success'])) { ?>
      
     <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
     <?php
     }?>

     <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

    <form class="form1" action="" method="POST">
      <div class="form-group1">
        <label for="username"  >Username : </label>
        <input type="text" class = "form-control" name="username" id="username">
      </div>

      <div class="form-group1">
       <label for="password"  >Password : </label>
       <input type="password" class = "form-control" name="password" id="password">
      </div>
      <br><br>
      <div class="text-center">
       <button class="btn btn-primary btn-lg" name="login">Login</button>
      </div>
    </form>
  </div>

</body>
</html>