
<!doctype html>
<html lang="en">

  <head>
   <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="col-lg-8 col-lg-offset-2">
       <h1 style="color: blue" align="center">Register page</h1>
       <p align="center">Please fill data to register!!!</p>
     

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
    



























    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="<?php echo base_url(); ?>js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>-->
  </body>
</html>
