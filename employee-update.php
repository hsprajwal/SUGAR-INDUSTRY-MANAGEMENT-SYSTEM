

<?php 
session_start();
// if(isset($_SESSION['authenticated']))
// {
//     $_SESSION['status'] = "You are already Logged In";
//     header('Location: dashboard.php');
//     exit(0);
// }
require 'dbcon.php';
$page_title = "Consumer";
include('header.php');

?>
<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
    
            <div class="col-md-5">
            <?php include('message.php');?>
               <div class="card shadow">
          
                <div class="card-header text-center">
                    <h3>employee</h3>
                </div>
                <?php
      if(isset($_GET['id']))
      {
           $employee_id = mysqli_real_escape_string($con, $_GET['id']);
           $query = "SELECT * FROM employee WHERE id='$employee_id' ";
           $query_run = mysqli_query($con, $query);

           if(mysqli_num_rows($query_run) > 0)
           {
              $employee = mysqli_fetch_array($query_run);
              ?>
                <div class="card-body">
                   <form action="code.php" method="POST">
                   <input type="hidden" name="id" value="<?= $employee['id']; ?>">
            
                    <div class="row">
                        
            <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>First Name</b></label>
                        <input type="text" name="fname" class="form-control"  value="<?=$employee['fname'];?>" required>

                    </div>
           </div>
            <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Last Name</b></label>
                        <input type="text" name="lname" class="form-control" value="<?=$employee['lname'];?>" required>

                    </div>
           </div>
           </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Email</b></label>
                        <input type="email" name="email" class="form-control" value="<?=$employee['email'];?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Phone</b></label>
                        <input type="text" name="phone" class="form-control" value="<?=$employee['phone'];?>" required>

                    </div>
                    
                    <div class="form-group mb-3">
                        <label for=""><b>Date Of Joining</b></label>
                        <input type="text" name="date" class="form-control" value="<?=$employee['date'];?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Salary</b></label>
                        <input type="text" name="salary" class="form-control" value="<?=$employee['salary'];?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Address</b></label>
                        <input type="text" name="address" class="form-control" value="<?=$employee['address'];?>" required>

                    </div>
                    
                    
                    <div class="from-group text-center">
                        <button type="submit" name="update_employee" class="btn btn-primary">Update</button>
                        <a class="btn btn-danger" href="employee-list.php" >Cancel</a>
                        <!-- <a href="password-reset.php" class="float-end">Forgot Your Password?</a> -->

                    </div>
                    <?php
           }
           else
           {
             echo "<h4>No Such Id Found</h4>";
           }

      }
     ?>

</form>

<!-- <h5>
    Did not recieve your Verification Email?
    <a href="resend-email-verification.php">Resend</a>
</h5> -->
                </div>
               </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include('footer.php'); ?>