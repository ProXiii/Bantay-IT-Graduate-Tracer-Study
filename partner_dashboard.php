<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_loginPartner($con);
// $user_form = check_form($con);

if (!isset($_SESSION)) {
    session_start();
}

ini_set("display_errors", 1);
error_reporting(E_ALL);
error_reporting(0);

$host = 'localhost';
$username = "root";
$password = "";
$database = "bantayit_gts";

$con = new mysqli($host, $username, $password, $database);

if ($con->connect_error) {
    echo $con->connect_error;
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>B a n t a y I T</title>

    <link rel="stylesheet" href="admin_dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="icon" href="./images/UBlogo.png">
</head>

<body class="  ">

    <div class="wrapper">

        <div class="iq-sidebar  sidebar-default ">
            <div style="height: 100px;" class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <!-- <a href="../backend/index.html" class="header-logo">
                    <img style="height: 60px; width:175px; position: relative;left: 35px;" src="./images/rgamingemporium-removebg-preview.png" class="img-fluid rounded-normal light-logo" alt="logo">
                    <h5 class="logo-title light-logo ml-3"></h5>
                </a> -->

            </div>
            <div style="padding-top: 20px;" class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active">
                            <a href="partner_dashboard.php" class="svg-icon">
                                <svg class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#8e3041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span style="color: #8e3041;" class="ml-4">Dashboard</span>
                            </a>
                        </li>
                        <!-- <li class="">
                            <a href="items_admin.php" class="">
                                <svg class="svg-icon" id="p-dash2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span class="ml-4">Items</span>
                            </a>
                        </li> -->

                        <!-- <li class=" ">
                            <a href="admin_alumni.php" class="">
                                <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#8e3041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span style="color: #8e3041;" class="ml-4">Alumni</span>

                            </a>

                        </li> -->

                        <li class="">
                            <a href="#return" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#8e3041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span style="color: #8e3041;" class="ml-4">Alumni</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#8e3041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="return" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                    <a href="partner_viewAlumni.php">
                                        <i class="las la-minus"></i><span style="color: #8e3041;">View</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="">
                            <a href="partner_message.php" class="">
                                <svg class="svg-icon" id="p-dash7" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#8e3041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span style="color: #8e3041;" class="ml-4">Send Message</span>
                            </a>
                            <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <!-- <li class="">
                            <a href="indexRegistered.php" class="">
                                <svg class="svg-icon" id="p-dash6" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#8e3041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="4 14 10 14 10 20"></polyline>
                                    <polyline points="20 10 14 10 14 4"></polyline>
                                    <line x1="14" y1="10" x2="21" y2="3"></line>
                                    <line x1="3" y1="21" x2="10" y2="14"></line>
                                </svg>
                                <span style="color: #8e3041;" class="ml-4">Announcement</span>
                            </a>
                            <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li> -->
                </nav>

                <div class="p-3"></div>
            </div>
        </div>
        <header>
            <a href="index.php" class="logo">
                <img src="./images/ub5-removebg-preview.png" alt="">
            </a>
            <!-- <h1 style="color: black; "> -->

            <!-- Bantay IT : Graduate Tracer -->
            <!-- </h1> -->

            <!-- <h2 style="color: #F9AE3B; position: relative; left: 450px; bottom: 15px">ALUMNI</h2>
            <a style="text-decoration: none;" href="">
                <h3 style="color: white; position: relative; top: 20px; left: 95px;">Alumni</h3>
            </a>
            <a style="text-decoration: none;" href="admin_login.php">
                <h3 style="color: white; position: relative; top: 20px; left: 50px;">Admin</h3>
            </a>
            <a style="text-decoration: none;" href="partner_login.php">
                <h3 style="color: white; position: relative; top: 20px; ">Partner</h3>
            </a> -->
            <div class="navigation">
                <ul class="menu">
                    <!--<div class="close-btn"></div>-->
                    <!--<li class="menu-item"><a href="index.php">Home</a></li>-->


                    <!--<li class="menu-item"><a href="#">About Us</a></li>-->
                    <!--<li class="menu-item"><a href="#">Contact Us</a></li>-->


                    <li style="position:relative;left:120px;top:18px;height:90px" class="menu-item">
                        <h3 style="color: #8e3041;" class="mb-3">PARTNER</h3>
                        <img style="position: relative;bottom:3px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QA/wD/AP+gvaeTAAABBElEQVQ4je2QQUrDUBCG/3m5RONCjLtumrQHkCTioxQt3bj0EMZzJN0LUuzCKO6FPrAVRbArA13ULqQPXTQeohlXwaoxeIB+u5n55/+HAdYAACLb64d1b/c/2m7N9yPb6+e1AIAMfEqMy6jmH5QH+ZIFXzFEL+8ZAKA+9JusbD8ScSxNa6ZSPfu13HCbAM6JRCdIbh++GQCASufvexvWUGSIm+bW6yDVL/ksdLwWMfVYcCd4Hj2tGhurhVrohaxsDkHiQpqWVqmehra7T0RnYGqfJKPxz8uo8FGO6zDoBoxrEA4J3DpO7pIibaEBAHQbO1XOjBjL5VEwuZ/8pSuFSwLWfPEJGqRW82STutMAAAAASUVORK5CYII=">
                        <!-- <a class="sub-btn" href="#"> <i class="fas fa-user"></i></a> -->
                        <!-- <a class="sub-btn" href="#"> <i class="fas fa-user"></i></a> -->

                        <ul style="width: 135px; margin-top:8px; " class="sub-menu">
                            <li style="position: relative; right:5px" class="sub-item"><a href="logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-btn"></div>

        </header>




        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-transparent card-block card-stretch card-height border-none">
                            <div class="card-body p-0 mt-lg-2 mt-0">
                                <h3 style="color: #8e3041;" class="mb-3">Greetings, <span style="color:#F9AE3B">Partner!</span></h3>
                                <p class="mb-0 mr-4">Your dashboard gives you views of key performance or business
                                    process.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4b col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-info-light">
                                        <!-- <img src="../assets/images/product/1.png" class="img-fluid" alt="image"> -->
                                    </div>
                                    <div>

                                        <p class="mb-2">Total Alumni</p>
                                        <h4>6</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-info iq-progress progress-1" data-percent="85">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4b col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-danger-light">
                                        <!-- <img src="../assets/images/product/2.png" class="img-fluid" alt="image"> -->
                                    </div>
                                    <div>

                                        <p class="mb-2">Employed Alumni</p>
                                        <h4>3</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-danger iq-progress progress-1" data-percent="70">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4b col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-success-light">
                                        <!-- <img src="../assets/images/product/3.png" class="img-fluid" alt="image"> -->
                                    </div>
                                    <div>


                                        <p class="mb-2">Unemployed Alumni</p>
                                        <h4>3</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-success iq-progress progress-1" data-percent="75">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script src="./js/backend-bundle.min.js"></script>


    <script src="./js/app.js"></script>

    </script>

</body>

</html>