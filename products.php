<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> By Products</title>
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
    <fieldset>
        <legend><h3>By products</h3></legend>
       <table>
        <tr>
            <td><label for ="date">date</label></td><td><input type="date" name="dob"></td>
        </tr>
        <tr>
            <td><label for="sugarcane">sugarcane</label></td><td><input type="number" id="sugarcane" name="sugarcane"placeholder="sugarcane in kg" required></td>
        </tr>
        <tr>
            <td><label for="beet">beet</label></td><td><input type="number" id="beet" name="beet" placeholder="beet in kg" required></td>
        </tr>
        <tr>
            <td><label for="corn">corn</label></td><td><input type="number" id="corn" name="corn" placeholder="corn in kg" required></td>
        </tr>
        <tr>
            <td><label for="fructose">fructose syrup</label></td><td><input type="number" id="fructose" name="fructose" placeholder="fructose in litres" required></td>
        </tr>
        <tr>
            <td><label for="jaugary">jaugary</label></td><td><input type="number" id="jaugary" name="jaugay"placeholder="jaugary in kg"></td>
        </tr>
        <tr>
            <td><label for="sugar">sugar</label></td><td><input type="number" id="sugar"name="sugar"placeholder="sugar in kg"></td>
        </tr>
        <tr>
            <td><label for="molasses">molasses</label></td><td><input type="number"id="molasses"name="molasses"placeholder="molasses in tons"></td>
        </tr>
        <tr>
            <td><label for="bagasse">bagasse</label></td><td><input type="number"id="bagasse"name="bagasse"placeholder="bagasse in tons"></td>
        </tr>
        <tr>
            <td><label for="rocksugar">rock sugar</label></td><td><input type=" number" id="rocksugar"name="rocksugar"placeholder="rocksugar in kg"></td>
        </tr>
    </table> -->
        <!-- this table must be updated on every consuming and after selling -->
    <!-- <button type="submit">submit</button>
    </fieldset>
</body>
</html> -->



<?php
session_start();
$page_title = "consumer";
include('header.php');
?>
<div class="py-10">
    <div class="container">
        <div class="row justify-content-center">
    
            <div class="col-md-8">
            <?php include('message.php');?>
               <div class="card shadow">
          
                <div class="card-header">
                    <h3 class="text-center">By Products</h3>
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
                        <label for=""><b>Sugarcane</b></label>
                        <input type="text" name="sugarcane" class="form-control" required>

                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Beet</b></label>
                        <input type="text" name="beet" class="form-control" required>

                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Corn</b></label>
                        <input type="text" name="corn" class="form-control" required>

                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Fructose Syrup</b></label>
                        <input type="text" name="fructose_syrup" class="form-control" required>

                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Jaugary</b></label>
                        <input type="text" name="jaugary" class="form-control" required>

                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Sugar</b></label>
                        <input type="text" name="sugar" class="form-control" required>

                    </div>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Molasses</b></label>
                        <input type="text" name="molasses" class="form-control" required>

                    </div>
</div>
                    <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Bagasse</b></label>
                        <input type="text" name="bagasse" class="form-control" required>

                    </div>
</div>
<div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for=""><b>Rock Sugar</b></label>
                        <input type="text" name="rock_sugar" class="form-control" required>

                    </div>
</div>
</div>
                    
                    <div class="from-group text-center">
                        <button type="submit" name="save_product" class="btn btn-primary">Save</button>
                        <a class="btn btn-danger" href="product-list.php" >Cancel</a>
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