

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
    
            <div class="col-md-7">
            <?php include('message.php');?>
               <div class="card shadow">
          
                <div class="card-header text-center">
                    <h3>Billing</h3>
                </div>
                <?php
      if(isset($_GET['id']))
      {
           $billing_id = mysqli_real_escape_string($con, $_GET['id']);
           $query = "SELECT * FROM billing WHERE id='$billing_id' ";
           $query_run = mysqli_query($con, $query);

           if(mysqli_num_rows($query_run) > 0)
           {
              $billing = mysqli_fetch_array($query_run);
              ?>
                <div class="card-body">
                   <form action="code.php" method="POST">
                   <input type="hidden" name="id" value="<?= $billing['id']; ?>">
            
                 
                   <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Date</b></label>
                        <input type="date" name="date" class="form-control" value="<?= $billing['date']; ?>" required>

                    </div>
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Select</b></label>
                        <select class="form-select" id="select" name="selects" aria-label="Default select example" value="<?= $billing['selects']; ?>"required>
 
                        <option value="farmer">farmer</option>
                        <option value="consumer">consumer</option>
</select>
                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Product</b></label>
                        <select class="form-select" id="product" name="product" aria-label="Default select example" value="<?= $billing['product']; ?>" required>
                <option value="sugarcane">sugarcane</option>
                <option value="beet">beet</option>
                <option value="corn">corn</option>
                <option value="fructose">Fructose syrup</option>
                <option value="jaugary">jaugary</option>
                <option value="sugar">sugar</option>
                <option value="molasses">molasses</option>
                <option value="bagasse">bagasse</option>
                <option value="sugar">sugar</option>
                </select>
                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Quantity</b></label>
                        <select  class="form-select" name="quantity" id="quantity" value="<?= $billing['quantity']; ?>" >
                    <option value="10kg">10kg</option>
                    <option value="20kg">20kg</option>
                  
                </select>
                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Amount</b></label>
                        <input type="text" name="amount" class="form-control" required value="<?= $billing['amount']; ?>">

                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Price</b></label>
                        <input type="text" name="price" class="form-control" required value="<?= $billing['price']; ?>">

                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>GST</b></label>
                        <input type="text" name="gst" class="form-control" required value="<?= $billing['gst']; ?>">

                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Total Price</b></label>
                        <input type="text" name="total_price" class="form-control" required value="<?= $billing['total_price']; ?>">

                    </div>
</div>
                   
</div>

</div>
</div>
                    
                    <div class="from-group text-center">
                        <button type="submit" name="update_billing" class="btn btn-primary">Save</button>
                        <a class="btn btn-danger" href="billing-list.php" >Cancel</a>
                        <!-- <a href="password-reset.php" class="float-end">Forgot Your Password?</a> -->

                    </div>
                    <br>
                    <br>
                    <br>
           
                    
                        <!-- <a href="password-reset.php" class="float-end">Forgot Your Password?</a> -->

                  
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