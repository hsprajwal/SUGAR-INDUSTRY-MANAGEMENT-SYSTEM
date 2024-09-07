<?php
session_start();

// if(!isset($_SESSION['auth_user']))
// {
//   header("Location: login.php");
// }

require 'dbcon.php';
?>


<?php include('header.php'); ?>

<div class="container mt-5">




   <div class="row">
   <div class="col-md-11" >
    

         <div class="card text-center">

            <div class="card-header">
             
               <h3 class="text-center"> -- Billing Details --</h3>
               <h4>
                  <a href="billing.php" class="btn btn-primary float-end">Billing</a>
                </h4>

             
            </div>
            

            <div class="card-body">
           

               <form action="code.php" method="POST">
                  
                 <?php include('message.php');  ?>
                  <table class="table table-bordered table-striped">

                     <thead>
                        <tr>
                        <th>
                              <button type="submit" name="del_multiple_billing" class="btn btn-danger"
                                 onclick="return confirm('Do you want delete this record..?');">Delete</button>
                           </th>

                          
                          <th>Date</th>
                          <th>Select</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Amount</th>
                          <th>Price</th>
                          <th>GST</th>
                          <th>Total Price</th>
                          
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
     $query = "SELECT * FROM billing";
     $query_run = mysqli_query($con,$query);
     
     if(mysqli_num_rows($query_run) > 0)
     {
      foreach($query_run as $billing)
      {
       
       ?>

                        <tr>
                        <td class="text-center">
                              <input type="checkbox" name="del_chk[]" value="<?=$billing['id']; ?>">
                           </td>

                           <!-- <td>
                              <?=$farmer['id']; ?>
                           </td> -->
                          
                           <td>
                              <?=$billing['date']; ?>
                           </td>
                        
                           <td>
                              <?=$billing['selects']; ?>
                           </td>
                           <td>
                              <?=$billing['product']; ?>
                           </td>
                           <td>
                              <?=$billing['quantity']; ?>
                           </td>
                           <td>
                              <?=$billing['amount']; ?>
                           </td>
                           <td>
                              <?=$billing['price']; ?>
                           </td>
                           <td>
                              <?=$billing['gst']; ?>
                           </td>
                           <td>
                              <?=$billing['total_price']; ?>
                           </td>
                         
                           <td>
                              <!-- <a href="farmer-view.php?id=<?= $farmer['id']; ?>" class="btn btn-info btn-sm">View</a> -->
                              <a href="billing-update.php?id=<?= $billing['id']; ?>"
                                 class="btn btn-success btn-sm">Edit</a>
                            <!--<a href="login-view.php" class="btn btn-info btn-sm">View</a> -->

                           </td>







                        </tr>

                        <?php
      }

     }
     else
     {
       echo "<h5> No Record Found </h5>";

     }

  ?>

                     </tbody>

                  </table>
               </form>


            </div>
         </div>
      </div>
   </div>
</div>
<?php include('footer.php'); ?>
