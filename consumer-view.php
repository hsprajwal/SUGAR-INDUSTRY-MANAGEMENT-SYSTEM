

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
                    <h3>Consumer</h3>
                </div>
                <?php
      if(isset($_GET['id']))
      {
           $consumer_id = mysqli_real_escape_string($con, $_GET['id']);
           $query = "SELECT * FROM consumer WHERE id='$consumer_id' ";
           $query_run = mysqli_query($con, $query);

           if(mysqli_num_rows($query_run) > 0)
           {
              $consumer = mysqli_fetch_array($query_run);
              ?>
                <div class="card-body">
                   <form action="code.php" method="POST">
                   <input type="hidden" name="id" value="<?= $consumer['id']; ?>">
            
                    
                    <div class="form-group mb-3">
                        <label for=""><b>First Name</b></label>
                        <input type="text" name="fname" class="form-control"  value="<?=$consumer['fname'];?>" readonly>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Last Name</b></label>
                        <input type="text" name="lname" class="form-control" value="<?=$consumer['lname'];?>" readonly>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Email</b></label>
                        <input type="email" name="email" class="form-control" value="<?=$consumer['email'];?>" readonly>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Phone</b></label>
                        <input type="text" name="phone" class="form-control" value="<?=$consumer['phone'];?>" readonly>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Address</b></label>
                        <input type="text" name="address" class="form-control" value="<?=$consumer['address'];?>" readonly>

                    </div>
                    
                    
                    <div class="from-group text-center">
                        <!-- <button type="submit" name="update_btn" class="btn btn-primary">Update</button> -->
                        <a class="btn btn-danger" href="consumer-list.php" >Go Back</a>
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

<?php include('footer.php'); ?>