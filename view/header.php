<?php
session_start();
include '../admin/modul/config2.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon"> -->
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/iconfont.min.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/helper.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/images/Space_Phone.png">
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <title>TN Mobile</title>
</head>

<body>
    <!--Header section start-->
    <div id="main-wrapper">
        <header class="header header-transparent header-sticky">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div
                            class="col-xl-6 col-lg-8 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center">
                            <!--Links start-->
                            <div class="header-top-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope-open-o"></i>Minhquang@gmai.com</a></li>
                                </ul>
                            </div>
                            <!--Links end-->
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                                <?php
                                if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
                                    ?>
                                <ul class="ht-us-menu d-flex">
                                    <li>
                                        <a href="#"><i class="fa fa-user-circle-o"></i>
                                            <?= $_SESSION['user_name'] ?></a>
                                        <ul class="ht-dropdown right">
                                            <li><a href="../user/logout.php">Đăng xuất</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <?php
                                } else {
                                    ?>
                                <ul class="ht-us-menu d-flex">
                                    <li>
                                        <a href="../user/login.php"><i class="fa fa-user-circle-o"></i> Đăng
                                            nhập</a>
                                    </li>
                                </ul>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row align-items-center">
                        </style>
                        <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                            <div class="logo">
                                <a href="./index.php" class="tn-mobile" style="font-size: 3.5em;font-weight: 1000;">TN
                                    <span style="color: red;">Mo</span>bile</a>
                            </div>
                        </div>

                        <!--Logo end-->

                        <!--Menu start-->
                        <div
                            class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="./index.php">Trang chủ</a>
                                    </li>
                                    <li><a href="./shop.php">Shop</a>
                                    </li>
                                    <li><a href="./contact.php">Liên hệ</a></li>
                                    <li><a href="./about.php">Giới thiệu</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--Menu end-->

                        <!--Search Cart Start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                            <div class="header-search">
                                <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                <div class="header-search-form">
                                    <form action="search.php" method="post">
                                        <input type="text" name="name_product" placeholder="Bạn tìm gì...">
                                        <button name="btn_search"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header-cart">
                                <a href="./cart.php" style="position: relative; font-size: 24px;">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span id="cart-count" style="position: relative;top:-4em;left:0.9em; background-color: red; 
                                        color: white; border-radius: 50%; padding: 4px 8px; font-size: 12px;"><?php
                                        if(isset($_SESSION["cart"])&&!empty($_SESSION["cart"])&&isset($_SESSION['user_name']))
                                        {
                                            $cartItemCount = count($_SESSION["cart"]);
                                            echo$cartItemCount-1;
                                        } 
                                        else{
                                            echo"0";
                                        }
                                ?></span>
                                </a>
                            </div>
                        </div>
                        <!--Search Cart End-->
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->
                </div>
            </div>
        </header>