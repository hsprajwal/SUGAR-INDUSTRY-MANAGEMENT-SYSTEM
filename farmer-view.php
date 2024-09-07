

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
                    <h3>Farmer</h3>
                </div>
                <?php
      if(isset($_GET['id']))
      {
           $farmer_id = mysqli_real_escape_string($con, $_GET['id']);
           $query = "SELECT * FROM farmer WHERE id='$farmer_id' ";
           $query_run = mysqli_query($con, $query);

           if(mysqli_num_rows($query_run) > 0)
           {
              $farmer = mysqli_fetch_array($query_run);
              ?>
                <div class="card-body">
                   <form action="code.php" method="POST">
                   <input type="hidden" name="id" value="<?= $farmer['id']; ?>">
            
                    <div class="row">
                        
            <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>First Name</b></label>
                        <input type="text" name="fname" class="form-control"  value="<?=$farmer['fname'];?>" required readonly>

                    </div>
           </div>
            <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Last Name</b></label>
                        <input type="text" name="lname" class="form-control" value="<?=$farmer['lname'];?>" required readonly>

                    </div>
           </div>
           </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Email</b></label>
                        <input type="email" name="email" class="form-control" value="<?=$farmer['email'];?>" required readonly>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Phone</b></label>
                        <input type="text" name="phone" class="form-control" value="<?=$farmer['phone'];?>" required readonly>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>State</b></label>
                        <select class="form-select"  name="state" aria-label="Default select example" value="<?=$farmer['state'];?>"  required readonly>
 
  <option value="karnataka">Karnataka</option>
                        <option value="kerala">Kerala</option>
                        <option value="tamilnadu">Tamilnadu</option>
                        <option value="ap">Andhra Pradesh</option>
                        <option value="telangana">Telengana</option>
                        <option value="maharashtran">Maharashtra</option> 
</select>
                       

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Address</b></label>
                        <input type="text" name="address" class="form-control" value="<?=$farmer['address'];?>" required readonly>

                    </div>
                    
                    
                    <div class="from-group text-center">
                         
                        <a class="btn btn-danger" href="farmer-list.php" >goback
                            
                        </a>
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