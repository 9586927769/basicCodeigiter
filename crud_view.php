<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
      <div class="jumbotron">
      <h1 align="center">Student Form</h1>
       </div>
    <div class="container">
    <div class="clear-fix">
    <h3 style="float: left">All Students</h3>
    <a href="#" class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#exampleModal">Add Student</a>
    

    </div>

    <div><?php if($this->session->flashdata('updated')){ ?>

<div style="color: #000" class="bg-success">
<?php echo $this->session->flashdata('updated'); ?>
</div>
 
    <?php } ?></div>
    <table class="table table-striped table-hover">
    <thread>
    <tr>
    <th>Roll No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Confirm Password</th>
    <th>Actions</th>
    </tr>
    </thread>
     <tbody>

     <?php foreach($student_details as $students): ?>

      <tr>
      <td>  
      <?php  echo $students->rollno; ?>
      </td>
      <td>
     
      <?php echo $students->firstname; ?>
      
      </td>
      <td>  
      <?php echo $students->lastname; ?>
      </td>
      <td>  
      <?php echo $students->email; ?>
      </td>
      <td>  
      <?php  echo $students->password; ?>
      </td>
      <td>  
      <?php echo $students->confirmpassword; ?>
      </td>
      <td>
       <a href="<?php echo base_url(); ?>index.php/crud/editStudent/<?php echo $students->id; ?>" class="btn btn-primary">Edit</a> 
       <a href="<?php echo base_url(); ?>index.php/crud/deleteStudent/<?php echo $students->id; ?>" class="btn btn-danger">Delete</a>
      </td>
      </td>

      </tr>

        <?php endforeach; ?>

     </tbody>
    </table>
      </div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form action="<?php echo base_url(); ?>index.php/crud/addStudent/" method="post">
    <?php  echo validation_errors("<div class='alert alert-danger'>","</div>"); ?> 
  
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="form-group">
         <label for="rollno">Roll No</label>
         <input type="text" name="rollno" placeholder="enter your roll no" class="form-control ">
         </div>
         <div class="form-group">
         <label for="firstname">First Name</label>
         <input type="text" name="firstname" placeholder="enter your First Name" class="form-control">
         </div>
         <div class="form-group">
         <label for="lastname">Last Name</label>
         <input type="text" name="lastname" placeholder="enter your Last Name" class="form-control">
         </div>
         <div class="form-group">
         <label for="email">Email</label>
         <input type="email" name="email" placeholder="enter your Email" class="form-control">
         </div>
         <div class="form-group">
         <label for="password">Password</label>
         <input type="text" name="password" placeholder="enter your Password" class="form-control">
         </div>
         <div class="form-group">
         <label for="confirmpassword">Confirm Password</label>
         <input type="text" name="confirmpassword" placeholder="enter your Confirmpassword" class="form-control">
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="insert" value="Add Student"  class="btn btn-success"> 
      </div>
      </form>
    </div>  
  </div>
</div>

<?php if($this->session->flashdata('error')): ?>

<div align="center" style="color: #000" class="bg-danger">
<?php echo $this->session->flashdata('error'); ?>
</div>
 
<?php endif; ?>



<?php if($this->session->flashdata('insert')): ?>

<div align="center" style="color: #000" class="bg-success">
<?php echo $this->session->flashdata('insert'); ?>
</div>
 
<?php endif; ?>






<?php if($this->session->flashdata('deleted')): ?>

<div align="center" style="color: #000" class="bg-success">
<?php echo $this->session->flashdata('deleted'); ?>
</div>
 
<?php endif; ?>
 
 
 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>