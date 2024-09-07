<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>
    <title>
        <?php if(isset($page_title)){echo "$page_title";}?>
    </title>
</head>
<style>
        /* Style the header */
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        /* Style the navigation bar */
        nav {
            overflow: hidden;
            background-color: #333;
        }

        /* Navigation bar links */
        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        /* On mouse-over, add a grey background color */
        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Login link */
        .login {
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        /* Style the footer */
        footer {
            background-color: #333;
            color: white;
            padding: 0px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 80px;
        }

        /* Center the image */
        .sugarcane-img {
            display: block;
            margin: 0 auto;
            width: 50%; /* Adjust the width as needed */
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to Sugar Cane Industry Management System</h1>
</header>

<nav>
    <a href="home.html">Home</a>
    <a href="farmer-list.php">Farmer</a>
    <a href="consumer-list.php">Consumer</a>
    <a href="employee-list.php">Employee</a>
    <a href="billing-list.php">Billing</a>
    <a href="product-list.php">By Products</a>
    <a class="login" href="login.HTML">Login</a>
</nav>

<body>