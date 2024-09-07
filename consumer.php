<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> consumer</title>
     <style type="text/css">
        button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
}
    </style> 
</head>
<body>
    <form>
        <fieldset>
            <legend><h2>consumer Details </h2> </legend>
             <table>
                <tr><td><label>Fname</label></td><td><input type="text" name="fname" id="fname"placeholder="enter your first name" required ></td></tr>
                <tr><td><label>Lname</label></td><td> <input type="text" name="lname" id="lname"placeholder="enter your last name"required ></td></tr>
                <tr><td> <label>Email</label></td><td><input type="email" name="email"id="email" placeholder="Enter your email"required  ></td></tr>
                <tr><td><label>Phone</label></td><td><input type=" tel" name="phone" id="phone"  placeholder="Enter your phone number"MXLENGTH="10" required></td></tr>
                <tr><td><label>Address</label></td><td><input type="text" name="address" id="address" placeholder="Enter your address" required></td></tr>
            </table>
                
            <button type="submit" >submit</button>
    </fieldset>
    </form>
</body>
</html> -->

<?php
session_start();
$page_title = "consumer";
include('header.php');
?>
<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
    
            <div class="col-md-5">
            <?php include('message.php');?>
               <div class="card shadow">
          
                <div class="card-header">
                    <h3 class="text-center">Consumner</h3>
                </div>
                <div class="card-body">
                   <form action="code.php" method="POST">
                    
                    <div class="form-group mb-3">
                        <label for=""><b>First Name</b></label>
                        <input type="text" name="fname" class="form-control" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Last Name</b></label>
                        <input type="text" name="lname" class="form-control" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Email</b></label>
                        <input type="email" name="email" class="form-control" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Phone</b></label>
                        <input type="text" name="phone" class="form-control" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for=""><b>Address</b></label>
                        <input type="text" name="address" class="form-control" required>

                    </div>
                    
                    <div class="from-group text-center">
                        <button type="submit" name="save_btn" class="btn btn-primary">Save</button>
                        <a class="btn btn-danger" href="consumer-list.php" >Cancel</a>
                        <!-- <a href="password-reset.php" class="float-end">Forgot Your Password?</a> -->

                    </div>
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
</div>
<?php include('footer.php'); ?>