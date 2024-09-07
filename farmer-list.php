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
             
               <h3 class="text-center"> -- Farmer Details --</h3>
               <h4>
                  <a href="farmer.php" class="btn btn-primary float-end">Add Farmer</a>
                </h4>

             
            </div>
            

            <div class="card-body">
           

               <form action="code.php" method="POST">
                  
                 <?php include('message.php');  ?>
                  <table class="table table-bordered table-striped">

                     <thead>
                        <tr>
                        <th>
                              <button type="submit" name="del_multiple" class="btn btn-danger"
                                 onclick="return confirm('Do you want delete this record..?');">Delete</button>
                           </th>

                           <th>Consumer ID</th>
                          <th> Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
     $query = "SELECT * FROM farmer";
     $query_run = mysqli_query($con,$query);
     
     if(mysqli_num_rows($query_run) > 0)
     {
      foreach($query_run as $farmer)
      {
       
       ?>

                        <tr>
                        <td class="text-center">
                              <input type="checkbox" name="del_chk[]" value="<?=$farmer['id']; ?>">
                           </td>

                           <td>
                              <?=$farmer['id']; ?>
                           </td>
                          
                           <td>
                              <?=$farmer['fname']; ?>
                           </td>
                        
                           <td>
                              <?=$farmer['email']; ?>
                           </td>
                           <td>
                              <?=$farmer['phone']; ?>
                           </td>
                           <td>
                              <?=$farmer['state']; ?>
                           </td>
                         
                           
                           <td>
                              <a href="farmer-view.php?id=<?= $farmer['id']; ?>" class="btn btn-info btn-sm">View</a>
                              <a href="farmer-edit.php?id=<?= $farmer['id']; ?>"
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