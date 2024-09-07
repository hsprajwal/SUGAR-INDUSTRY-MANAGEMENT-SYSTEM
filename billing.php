<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> billing</title>
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
        <legend><h2>Billing</h2></legend>
        <table>
        <tr>
            <td><label>DATE</label></td>
            <td><input type="date" name="dob"></td>
        </tr>
        <tr>
            <td><label> select</label></td>
            <td>
                <select name="select" id="select">
                <option value="farmer">farmer</option>
                <option value="consumer">consumer</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> <label>product</label></td>
            <td>
                <select name="product" id="product">
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
            </td>
        </tr>
        <tr>
            <td><label>quantity</label></td>
            <td>
                <select name="quantity" id="quantity"  type="number">
                    <option value="10kg">10kg</option>
                    <option value="20kg">20kg</option>
                  
                </select>
            </td>
        </tr>
        <tr>
            <td><label>amount</label></td>
            <td><input type="number" id="amount" name="amount" placeholder="in rupees"required></td>
        </tr>
        <tr>
            <td><label> price </label></td>
            <td><input type="number" id="Price" name="Price" placeholder="in rupees"></td>
        </tr>
        <tr>
            <td><label>GST</label></td>
            <td><input type=" text" id="gst" name="gst" placeholder="18% of the tax"></td>
        </tr> -->
        <!-- it should calculate the total amount and total gst or the goods and need to print the pdf of the bill with transction id    -->
        <!-- <tr>
            <td><label>total price</label></td>
            <td><input type=" text" id="total" name="total" placeholder=""></td>
        </tr>
        </table>
        <button type="submit">submit</button>
    </fieldset>
   </form>
</body>
</html> -->
<?php
session_start();
$page_title = "consumer";
include('header.php');
?>
<div class="py-7">
    <div class="container">
        <div class="row justify-content-center">
    
            <div class="col-md-8">
            <?php include('message.php');?>
               <div class="card shadow">
          
                <div class="card-header">
                    <h3 class="text-center">Billing</h3>
                </div>
                <div class="card-body">
                   <form action="code.php" method="POST">
                   <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Date</b></label>
                        <input type="date" name="date" class="form-control" required>

                    </div>
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Select</b></label>
                        <select class="form-select" id="select" name="selects" aria-label="Default select example" required>
 
                        <option value="farmer">farmer</option>
                        <option value="consumer">consumer</option>
</select>
                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Product</b></label>
                        <select class="form-select" id="product" name="product" aria-label="Default select example" required>
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
                        <select  class="form-select" name="quantity" id="quantity"  >
                    <option value="10kg">10kg</option>
                    <option value="20kg">20kg</option>
                  
                </select>
                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Amount</b></label>
                        <input type="text" name="amount" class="form-control" required>

                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Price</b></label>
                        <input type="text" name="price" class="form-control" required>

                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>GST</b></label>
                        <input type="text" name="gst" class="form-control" required>

                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Total Price</b></label>
                        <input type="text" name="total_price" class="form-control" required>

                    </div>
</div>
                   
</div>

</div>
</div>
                    
                    <div class="from-group text-center">
                        <button type="submit" name="save_billing" class="btn btn-primary">Save</button>
                        <a class="btn btn-danger" href="billing-list.php" >Cancel</a>
                        <!-- <a href="password-reset.php" class="float-end">Forgot Your Password?</a> -->

                    </div>
                    <br>
                    <br>
                    <br>
</form>
<br>
<br>
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