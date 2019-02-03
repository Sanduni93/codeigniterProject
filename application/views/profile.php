<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
 <link rel="stylesheet"  href="<?php echo base_url();?>assets/css/logincss.css">
 <style type="text/css">
  table{
  border:1px solid #000033;
}
 </style>
</head>
<body class="profilebody">

 <div class="col-lg-8 col-lg-offset-2">
  <h1 style="color:  #000033; font-size: 36px; font-family: arial black" align="center">Welcome To Our Page</h1>
  <?php if(isset($_SESSION['success'])) { ?>
  <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
  <?php
  }?>
 <p style="font-size:22px; color:#ccfff5;"> Hello <?php echo $_SESSION['username']; ?> </p>
 <h4 align="left">View our registered users..</h4>
  <br><br>
  <div class="table-responsive">
    <table class="table table-bordered">
      <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Date of Birth</td>
        <td>Gender</td>
      </tr>
    <?php 
     if ($fetch_data->num_rows() > 0)
     {
      foreach ($fetch_data->result() as $row) 
      {
      ?> 
        <tr>
          <td><?php echo $row->user_id; ?></td>
          <td><?php echo $row->name; ?></td>
          <td><?php echo $row->dob; ?></td>
          <td><?php echo $row->gender; ?></td>
        </tr>
    <?php    
    }
    }
    else
    {
    ?> 
        <tr>
          <td colspan="3">No Data Found</td>
        </tr>
    <?php
    }
    ?>
    </table>
    </div>
    <br> <br>
    <a style = "font-size:24px; color: #00001a;" href="<?php echo base_url(); ?>index.php/auth/logout">Logout</a>
  
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
</body>
</html>