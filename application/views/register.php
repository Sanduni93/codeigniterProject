<!DOCTYPE html>
<html>
<head>
	<title>practise</title>
	 <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
</head>
<body>

 <div class="col-lg-8 col-lg-offset-2">
       <h1 style="color: blue" align="center">Register1 page</h1>
       <p align="center">Please fill data to register 1 !!!</p>
     <?php echo validation_errors("<div class="alert alert-danger">","</div>");?>

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
               <button class="btn btn-primary" name="register">Register</button>
             </div>
          
    
        </form>


    </div>



</body>
</html>