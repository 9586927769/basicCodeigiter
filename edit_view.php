<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
      <div class="jumbotron">
      <h1 align="center">Student Form</h1>
       </div>
     <div class="container">
     <h1 align="center">Edit Product</h1>

      <form action="<?php echo base_url();  ?>index.php/crud/update/<?php echo $singleStudent->id; ?>" method="post">
         <div class="form-group">
         <label for="rollno">Roll No</label>
         <input type="text" name="rollno" placeholder="enter your roll no" class="form-control" value="<?php echo $singleStudent->rollno; ?>">
         </div>
         <div class="form-group">
         <label for="firstname">First Name</label>
         <input type="text" name="firstname" placeholder="enter your First Name" class="form-control" value="<?php echo $singleStudent->firstname; ?>">
         </div>
         <div class="form-group">
         <label for="lastname">Last Name</label>
         <input type="text" name="lastname" placeholder="enter your Last Name" class="form-control" value="<?php echo $singleStudent->lastname; ?>">
         </div>
         <div class="form-group">
         <label for="email">Email</label>
         <input type="email" name="email" placeholder="enter your Email" class="form-control" value="<?php echo $singleStudent->email; ?>">
         </div>
         <div class="form-group">
         <label for="password">Password</label>
         <input type="text" name="password" placeholder="enter your Password" class="form-control" value="<?php echo $singleStudent->password; ?>">
         </div>
         <div class="form-group">
         <label for="confirmpassword">Confirm Password</label>
         <input type="text" name="confirmpassword" placeholder="enter your Confirmpassword" class="form-control" value="<?php echo $singleStudent->confirmpassword; ?>">
         </div>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <input type="submit" name="insert" value="Update"  class="btn btn-success"> 
        </div>
        </form>
        </div>  
        </div>
        </div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>