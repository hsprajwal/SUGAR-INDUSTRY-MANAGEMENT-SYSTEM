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
             
               <h3 class="text-center"> -- employee Details --</h3>
               <h4>
                  <a href="employee.php" class="btn btn-primary float-end">Add employee</a>
                </h4>

             
            </div>
            

            <div class="card-body">
           

               <form action="code.php" method="POST">
                  
                 <?php include('message.php');  ?>
                  <table class="table table-bordered table-striped">

                     <thead>
                        <tr>
                        <th>
                              <button type="submit" name="employee_multiple" class="btn btn-danger"
                                 onclick="return confirm('Do you want delete this record..?');">Delete</button>
                           </th>

                           <th>Employee ID</th>
                          <th> Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Salary</th>
                          <th>Date</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
     $query = "SELECT * FROM employee";
     $query_run = mysqli_query($con,$query);
     
     if(mysqli_num_rows($query_run) > 0)
     {
      foreach($query_run as $employee)
      {
       
       ?>

                        <tr>
                        <td class="text-center">
                              <input type="checkbox" name="del_chk[]" value="<?=$employee['id']; ?>">
                           </td>

                           <td>
                              <?=$employee['id']; ?>
                           </td>
                          
                           <td>
                              <?=$employee['fname']; ?>
                           </td>
                        
                           <td>
                              <?=$employee['email']; ?>
                           </td>
                           <td>
                              <?=$employee['phone']; ?>
                           </td>
                           <td>
                              <?=$employee['salary']; ?>
                           </td>
                           <td>
                              <?=$employee['date']; ?>
                           </td>
                         
                           
                           <td>
                              <!-- <a href="employee-view.php?id=<?= $employee['id']; ?>" class="btn btn-info btn-sm">View</a> -->
                              <a href="employee-update.php?id=<?= $employee['id']; ?>"
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
                  <br>

               </form>


            </div>
         </div>
      </div>
   </div>
</div>



<?php include('footer.php'); ?>
