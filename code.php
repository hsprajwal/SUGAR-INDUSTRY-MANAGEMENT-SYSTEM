<?php
session_start();
include('dbcon.php');



if(isset($_POST['save_btn']))
{
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
	// $mem_type_amount = mysqli_real_escape_string($con, $_POST['mem_type_amount']);
	
		$query = "INSERT INTO consumer (fname,lname,email,phone,address) VALUES ('$fname','$lname','$email','$phone','$address')";
	
	    $query_run = mysqli_query($con, $query);
	 
		
	if($query_run)
	{
		
		$_SESSION['message'] = "Membership Type Added Successfully";
		header("Location: consumer-list.php");
		exit(0);
		
	}
	else
	{
		
		$_SESSION['message'] = "Membership Type Not Created ";
		header("Location: consumer-list.php");
		exit(0);
		
	}
	
}



if(isset($_POST['del_multiple_data']))
{
   $all_id = $_POST['del_chk'];
   $seperate_all_id = implode(",",$all_id);

    $query = "DELETE FROM consumer WHERE id In($seperate_all_id)";
    $query_run = mysqli_query($con, $query);

    if($query_run)

    {
        $_SESSION['status'] = "Deleted id's are $seperate_all_id";
        $_SESSION['message'] = "Member Deleted Successfully";
        header("Location: consumer-list.php");
    }
    else
    {
        $_SESSION['message'] = "Member Not Deleted Successfully";
        header("Location: index1.php");

    }
    }


    if(isset($_POST['update_btn']))
    {
        $consumer_id = $_POST['id'];
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
    
    
        if($images != '')
        {
           $update_filename = $_FILES['images']['name'];
        }
        else
        {
           $update_filename = $old_images;
        }
        if($_FILES['images']['name'] !='')
        {
            if(file_exists("upload/". $_FILES["images"]["name"]))
            {
            $filename = $_FILES["images"]["name"];
            $_SESSION['status']= "Image already Exists. '.$filename.'";
            header("Location: index1.php");
            }
        }
        else
        {
            $query = "UPDATE consumer SET fname='$fname', lname='$lname', email='$email', phone='$phone', address='$address' WHERE id='$consumer_id' ";
            $query_run = mysqli_query($con, $query);
            
                if($query_run)
                {
                    // if($_FILES['images']['name'] !='')
                    // {
                    // 	move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
                    //     unlink("upload/".$old_image);
                        
                    // }
                    $_SESSION['message'] = "Member updated  Successfully";
                    header("Location: consumer-list.php");
                }
                else
                {
                    $_SESSION['message'] = "Member not updated Successfully";
                    header("Location: consumer.php");
                }
    
            }
    }
    

    // Add Farmer code

    
if(isset($_POST['save_btns']))
{
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
	// $mem_type_amount = mysqli_real_escape_string($con, $_POST['mem_type_amount']);
	
		$query = "INSERT INTO farmer (fname,lname,email,phone,state,address) VALUES ('$fname','$lname','$email','$phone','$state','$address')";
	
	    $query_run = mysqli_query($con, $query);
	 
		
	if($query_run)
	{
		
		$_SESSION['message'] = "Membership Type Added Successfully";
		header("Location: farmer-list.php");
		exit(0);
		
	}
	else
	{
		
		$_SESSION['message'] = "Membership Type Not Created ";
		header("Location: farmer-list.php");
		exit(0);
		
	}

    	
}


//Delete Code for Farmer

    
if(isset($_POST['del_multiple']))
{
   $all_id = $_POST['del_chk'];
   $seperate_all_id = implode(",",$all_id);

    $query = "DELETE FROM farmer WHERE id In($seperate_all_id)";
    $query_run = mysqli_query($con, $query);

    if($query_run)

    {
        $_SESSION['status'] = "Deleted id's are $seperate_all_id";
        $_SESSION['message'] = "Member Deleted Successfully";
        header("Location: farmer-list.php");
    }
    else
    {
        $_SESSION['message'] = "Member Not Deleted Successfully";
        header("Location: farmer.php");

    }
    }

//Update code for Farmer


if(isset($_POST['update_btns']))
{
    $farmer_id = $_POST['id'];
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $address = $_POST['address'];


    if($images != '')
    {
       $update_filename = $_FILES['images']['name'];
    }
    else
    {
       $update_filename = $old_images;
    }
    if($_FILES['images']['name'] !='')
    {
        if(file_exists("upload/". $_FILES["images"]["name"]))
        {
        $filename = $_FILES["images"]["name"];
        $_SESSION['status']= "Image already Exists. '.$filename.'";
        header("Location: index1.php");
        }
    }
    else
    {
        $query = "UPDATE farmer SET fname='$fname', lname='$lname', email='$email', phone='$phone', state='$state', address='$address' WHERE id='$farmer_id' ";
        $query_run = mysqli_query($con, $query);
        
            if($query_run)
            {
                // if($_FILES['images']['name'] !='')
                // {
                // 	move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
                //     unlink("upload/".$old_image);
                    
                // }
                $_SESSION['message'] = "Member updated  Successfully";
                header("Location: farmer-list.php");
            }
            else
            {
                $_SESSION['message'] = "Member not updated Successfully";
                header("Location: farmer.php");
            }

        }
}

//ADD Product Backend Connection


 
if(isset($_POST['save_product']))
{
	$date = mysqli_real_escape_string($con, $_POST['date']);
    $sugarcane = mysqli_real_escape_string($con, $_POST['sugarcane']);
    $beet = mysqli_real_escape_string($con, $_POST['beet']);
    $corn = mysqli_real_escape_string($con, $_POST['corn']);
    $fructose_syrup = mysqli_real_escape_string($con, $_POST['fructose_syrup']);
    $jaugary = mysqli_real_escape_string($con, $_POST['jaugary']);
    $sugar = mysqli_real_escape_string($con, $_POST['sugar']);
    $molasses = mysqli_real_escape_string($con, $_POST['molasses']);
    $bagasse = mysqli_real_escape_string($con, $_POST['bagasse']);
    $rock_sugar = mysqli_real_escape_string($con, $_POST['rock_sugar']);
	// $mem_type_amount = mysqli_real_escape_string($con, $_POST['mem_type_amount']);
	
		$query = "INSERT INTO products (date,sugarcane,beet,corn,fructose_syrup,jaugary,sugar,molasses,bagasse,rock_sugar) VALUES ('$date','$sugarcane','$beet','$corn','$fructose_syrup','$jaugary','$sugar','$molasses', '$bagasse', '$rock_sugar')";
	
	    $query_run = mysqli_query($con, $query);
	 
		
	if($query_run)
	{
		
		$_SESSION['message'] = "Membership Type Added Successfully";
		header("Location: product-list.php");
		exit(0);
		
	}
	else
	{
		
		$_SESSION['message'] = "Membership Type Not Created ";
		header("Location: product-list.php");
		exit(0);
		
	}

    	
}

//Update code for Product

if(isset($_POST['update_btns_product']))
{
    $products_id = $_POST['id'];
    $date = $_POST['date'];
    $sugarcane =  $_POST['sugarcane'];
    $beet =  $_POST['beet'];
    $corn =  $_POST['corn'];
    $fructose_syrup = $_POST['fructose_syrup'];
    $jaugary =  $_POST['jaugary'];
    $sugar =  $_POST['sugar'];
    $molasses =  $_POST['molasses'];
    $bagasse =  $_POST['bagasse'];
    $rock_sugar =  $_POST['rock_sugar'];
   


    if($images != '')
    {
       $update_filename = $_FILES['images']['name'];
    }
    else
    {
       $update_filename = $old_images;
    }
    if($_FILES['images']['name'] !='')
    {
        if(file_exists("upload/". $_FILES["images"]["name"]))
        {
        $filename = $_FILES["images"]["name"];
        $_SESSION['status']= "Image already Exists. '.$filename.'";
        header("Location: index1.php");
        }
    }
    else
    {
        $query = "UPDATE products SET date='$date', sugarcane='$sugarcane', beet='$beet', corn='$corn', fructose_syrup='$fructose_syrup', jaugary='$jaugary', sugar='$sugar', molasses='$molasses', bagasse='$bagasse', rock_sugar='$rock_sugar' WHERE id='$products_id' ";
        $query_run = mysqli_query($con, $query);
        
            if($query_run)
            {
                // if($_FILES['images']['name'] !='')
                // {
                // 	move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
                //     unlink("upload/".$old_image);
                    
                // }
                $_SESSION['message'] = "Member updated  Successfully";
                header("Location: product-list.php");
            }
            else
            {
                $_SESSION['message'] = "Member not updated Successfully";
                header("Location: product.php");
            }

        }
}

// Delete code for Product

    
if(isset($_POST['del_multiple_product']))
{
   $all_id = $_POST['del_chk'];
   $seperate_all_id = implode(",",$all_id);

    $query = "DELETE FROM products WHERE id In($seperate_all_id)";
    $query_run = mysqli_query($con, $query);

    if($query_run)

    {
        $_SESSION['status'] = "Deleted id's are $seperate_all_id";
        $_SESSION['message'] = "Member Deleted Successfully";
        header("Location: product-list.php");
    }
    else
    {
        $_SESSION['message'] = "Member Not Deleted Successfully";
        header("Location: product-list.php");

    }
    }

    // Add Code For billing
    
if(isset($_POST['save_billing']))
{
	$date = mysqli_real_escape_string($con, $_POST['date']);
    $selects = mysqli_real_escape_string($con, $_POST['selects']);
    $product = mysqli_real_escape_string($con, $_POST['product']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $gst = mysqli_real_escape_string($con, $_POST['gst']);
    $total_price = mysqli_real_escape_string($con, $_POST['total_price']);
    
	// $mem_type_amount = mysqli_real_escape_string($con, $_POST['mem_type_amount']);
	
		$query = "INSERT INTO billing (date,selects,product,quantity,amount,price,gst,total_price) VALUES ('$date','$selects','$product','$quantity','$amount','$price','$gst','$total_price')";
	
	    $query_run = mysqli_query($con, $query);
	 
		
	if($query_run)
	{
		
		$_SESSION['message'] = "Membership Type Added Successfully";
		header("Location: billing-list.php");
		exit(0);
		
	}
	else
	{
		
		$_SESSION['message'] = "Membership Type Not Created ";
		header("Location: billing-list.php");
		exit(0);
		
	}

    	
}


//Update Billing Code

if(isset($_POST['update_billing']))
{
    $billing_id = $_POST['id'];
    $date = $_POST['date'];
 
    $selects =  $_POST['selects'];
    $product =  $_POST['product'];
    $quantity =  $_POST['quantity'];
    $amount =  $_POST['amount'];
    $price =  $_POST['price'];
    $gst =  $_POST['gst'];
    $total_price =  $_POST['total_price'];
   


    if($images != '')
    {
       $update_filename = $_FILES['images']['name'];
    }
    else
    {
       $update_filename = $old_images;
    }
    if($_FILES['images']['name'] !='')
    {
        if(file_exists("upload/". $_FILES["images"]["name"]))
        {
        $filename = $_FILES["images"]["name"];
        $_SESSION['status']= "Image already Exists. '.$filename.'";
        header("Location: index1.php");
        }
    }
    else
    {
        $query = "UPDATE billing SET date='$date', selects='$selects', product='$product', quantity='$quantity', amount='$amount', price='$price',  gst='$gst', total_price='$total_price' WHERE id='$billing_id' ";
        $query_run = mysqli_query($con, $query);
        
            if($query_run)
            {
                // if($_FILES['images']['name'] !='')
                // {
                // 	move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
                //     unlink("upload/".$old_image);
                    
                // }
                $_SESSION['message'] = "Member updated  Successfully";
                header("Location: billing-list.php");
            }
            else
            {
                $_SESSION['message'] = "Member not updated Successfully";
                header("Location: billing.php");
            }

        }
}

//Delete code for billing
    
if(isset($_POST['del_multiple_billing']))
{
   $all_id = $_POST['del_chk'];
   $seperate_all_id = implode(",",$all_id);

    $query = "DELETE FROM billing WHERE id In($seperate_all_id)";
    $query_run = mysqli_query($con, $query);

    if($query_run)

    {
        $_SESSION['status'] = "Deleted id's are $seperate_all_id";
        $_SESSION['message'] = "Member Deleted Successfully";
        header("Location: billing-list.php");
    }
    else
    {
        $_SESSION['message'] = "Member Not Deleted Successfully";
        header("Location: billing-list.php");

    }
    }


    
if(isset($_POST['employee_save']))
{
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $salary = mysqli_real_escape_string($con, $_POST['salary']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
	// $mem_type_amount = mysqli_real_escape_string($con, $_POST['mem_type_amount']);
	
		$query = "INSERT INTO employee (fname,lname,email,phone,address,date,salary) VALUES ('$fname','$lname','$email','$phone','$address','$date','$salary')";
	
	    $query_run = mysqli_query($con, $query);
	 
		
	if($query_run)
	{
		
		$_SESSION['message'] = "Membership Type Added Successfully";
		header("Location: employee-list.php");
		exit(0);
		
	}
	else
	{
		
		$_SESSION['message'] = "Membership Type Not Created ";
		header("Location: consumer-list.php");
		exit(0);
		
	}
	
}


if(isset($_POST['update_employee']))
{
    $employee_id = $_POST['id'];
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $date=$_POST['date'];
    $salary = $_POST['salary'];


    if($images != '')
    {
       $update_filename = $_FILES['images']['name'];
    }
    else
    {
       $update_filename = $old_images;
    }
    if($_FILES['images']['name'] !='')
    {
        if(file_exists("upload/". $_FILES["images"]["name"]))
        {
        $filename = $_FILES["images"]["name"];
        $_SESSION['status']= "Image already Exists. '.$filename.'";
        header("Location: index1.php");
        }
    }
    else
    {
        $query = "UPDATE employee SET fname='$fname', lname='$lname', email='$email', phone='$phone', address='$address', date='$date', salary='$salary' WHERE id='$employee_id' ";
        $query_run = mysqli_query($con, $query);
        
            if($query_run)
            {
                // if($_FILES['images']['name'] !='')
                // {
                // 	move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
                //     unlink("upload/".$old_image);
                    
                // }
                $_SESSION['message'] = "Member updated  Successfully";
                header("Location: employee-list.php");
            }
            else
            {
                $_SESSION['message'] = "Member not updated Successfully";
                header("Location: consumer.php");
            }

        }
}

    
if(isset($_POST['employee_multiple']))
{
   $all_id = $_POST['del_chk'];
   $seperate_all_id = implode(",",$all_id);

    $query = "DELETE FROM employee WHERE id In($seperate_all_id)";
    $query_run = mysqli_query($con, $query);

    if($query_run)

    {
        $_SESSION['status'] = "Deleted id's are $seperate_all_id";
        $_SESSION['message'] = "Member Deleted Successfully";
        header("Location: employee-list.php");
    }
    else
    {
        $_SESSION['message'] = "Member Not Deleted Successfully";
        header("Location: farmer.php");

    }
    }


?>