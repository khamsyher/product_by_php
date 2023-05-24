<?php include('config.php');?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Online Shop</title>
        <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.css">
        <script src="./bootstrap-4.5.3-dist/js/bootstrap.js"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>
        <div class="container-fluid" style="background-color:#158b97;   padding-right: 0px;padding-left: 0px;">
            <img src="./image/baner.jpg" alt="" width="100%">
        </div>

        <nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top">
            <a class="navbar-brand" href="index.php">Home</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categories.php">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Sales.php">Sales</a>
                </li>
            </ul>
        </nav>
