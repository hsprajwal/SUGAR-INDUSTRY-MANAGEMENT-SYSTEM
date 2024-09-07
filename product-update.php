

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
                    <h3>Products</h3>
                </div>
                <?php
      if(isset($_GET['id']))
      {
           $products_id = mysqli_real_escape_string($con, $_GET['id']);
           $query = "SELECT * FROM products WHERE id='$products_id' ";
           $query_run = mysqli_query($con, $query);

           if(mysqli_num_rows($query_run) > 0)
           {
              $products = mysqli_fetch_array($query_run);
              ?>
                <div class="card-body">
                   <form action="code.php" method="POST">
                   <input type="hidden" name="id" value="<?= $products['id']; ?>">
            
              
          
                   <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Date</b></label>
                        <input type="date" name="date" class="form-control" value="<?=$products['date'];?>" required>

                    </div>
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Sugarcane</b></label>
                        <input type="text" name="sugarcane" class="form-control" value="<?=$products['sugarcane']; ?>" required>

                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Beet</b></label>
                        <input type="text" name="beet" class="form-control" value="<?=$products['beet']; ?>" required>

                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Corn</b></label>
                        <input type="text" name="corn" class="form-control" value="<?=$products['corn']; ?>" required>

                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Fructose Syrup</b></label>
                        <input type="text" name="fructose_syrup" class="form-control" value="<?=$products['fructose_syrup']; ?>" required>

                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Jaugary</b></label>
                        <input type="text" name="jaugary" class="form-control" value="<?=$products['jaugary']; ?>" required>

                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Sugar</b></label>
                        <input type="text" name="sugar" class="form-control" value="<?=$products['sugar']; ?>" required>

                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Molasses</b></label>
                        <input type="text" name="molasses" class="form-control"value="<?=$products['molasses']; ?>" required>

                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Bagasse</b></label>
                        <input type="text" name="bagasse" class="form-control"value="<?=$products['bagasse']; ?>" required>

                    </div>
</div>
<div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Rock Sugar</b></label>
                        <input type="text" name="rock_sugar" class="form-control"value="<?=$products['rock_sugar']; ?>" required>

                    </div>
</div>
</div>
                    
                    
                    <div class="from-group text-center">
                        <button type="submit" name="update_btns_product" class="btn btn-primary">Update</button>
                        <a class="btn btn-danger" href="farmer-list.php" >Cancel</a>
                        <!-- <a href="password-reset.php" class="float-end">Forgot Your Password?</a> -->

                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
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