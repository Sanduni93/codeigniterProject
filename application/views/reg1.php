<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">

   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/logincss.css">
</head>
<body class="registerbody">

 <div class="col-lg-8 col-lg-offset-2">
       <h1 style="color: #ff1ac6; font-size: 36px; font-family: arial black" align="center">Register Here</h1>
       <p style="color: #ff4dd2; font-size: 24px;" align="center">Please fill data to register your account!!!</p>
      
      <?php if(isset($_SESSION['success'])) { ?>
      
      <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
      <?php
      }?>

      <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

      <form action="" method="POST">

       <div class="form-group">
         <label for="name"  >Name : </label>
         <input type="text" class = "form-control" name="name" id="name">
         </div>
      
       <div class="form-group">
         <label for="dob"  >Date of Birth : </label>
         <input type="text" class = "form-control" name="dob" id="dob" placeholder="dd/MM/yyyy">
       </div>

       <div class="form-group">
         <label for="gender"  >Gender : </label>
         <select class="form-control" id="gender" name="gender">
           <option value="Male">Male</option>
           <option value="Female">Female</option>

         </select>
       </div>

       <div class="form-group">
         <label for="username"  >Username : </label>
         <input type="text" class = "form-control" name="username" id="username">
       </div>

       <div class="form-group">
         <label for="password"  >Password : </label>
         <input type="password" class = "form-control" name="password" id="password">
       </div>

       <div class="text-center">
         <button class="btn btn-default btn-lg" style="font-family: arial black; color: red;" name="reg1">Register</button>
       </div>
       <div class="text-left">
        <p style="color: #ffccff;">Do you already have an account ? </p>
         <a href="login" style="font-family: arial black; color:  #ffccff; font-size: 18px;">Login Here</a>
       </div>
       

      </form>
  </div>
</body>
</html>