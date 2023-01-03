<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>B a n t a y I T</title>

    <link rel="stylesheet" href="../alumni_profile.css?v=<?php echo time(); ?>">
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
                        <li class="">
                            <a href="../admin_dashboard.php" class="svg-icon">
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

                        <!-- <li class="active">
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
                                <li class="active">
                                    <a href="../admin_viewAlumni.php">
                                        <i class="las la-minus"></i><span style="color: #8e3041;">View</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#">
                                        <i class="las la-minus"></i><span style="color: #8e3041;">Delete</span>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="../admin_message.php" class="">
                                <svg class="svg-icon" id="p-dash7" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#8e3041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span style="color: #8e3041;" class="ml-4">Send Announcement</span>
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
                <img src="../images/ub5-removebg-preview.png" alt="">
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
                        <h3 style="color: #8e3041;" class="mb-3">ADMIN</h3>
                        <img style="position: relative;bottom:3px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QA/wD/AP+gvaeTAAABBElEQVQ4je2QQUrDUBCG/3m5RONCjLtumrQHkCTioxQt3bj0EMZzJN0LUuzCKO6FPrAVRbArA13ULqQPXTQeohlXwaoxeIB+u5n55/+HAdYAACLb64d1b/c/2m7N9yPb6+e1AIAMfEqMy6jmH5QH+ZIFXzFEL+8ZAKA+9JusbD8ScSxNa6ZSPfu13HCbAM6JRCdIbh++GQCASufvexvWUGSIm+bW6yDVL/ksdLwWMfVYcCd4Hj2tGhurhVrohaxsDkHiQpqWVqmehra7T0RnYGqfJKPxz8uo8FGO6zDoBoxrEA4J3DpO7pIibaEBAHQbO1XOjBjL5VEwuZ/8pSuFSwLWfPEJGqRW82STutMAAAAASUVORK5CYII=">
                        <!-- <a class="sub-btn" href="#"> <i class="fas fa-user"></i></a> -->
                        <!-- <a class="sub-btn" href="#"> <i class="fas fa-user"></i></a> -->

                        <ul style="width: 135px; margin-top:8px; " class="sub-menu">
                            <li style="position: relative; right:5px" class="sub-item"><a href="../admin_login.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-btn"></div>

        </header>





        <div class="content-page">
            <div class="container-fluid">
                <div class="header2">

                    <!-- <div class="fakeimg" style="height:300px;">Image</div> -->
                    <div class="img__container">
                        <img src="../images/alumni/anon2.png" alt="Profile Picture" />
                        <!-- <span></span> -->
                    </div>
                    <div class="column">

                        <h2>Raphael Atienza</h2>
                        <!-- <h5>Software Developer</h5> -->
                        <!-- <h5>"UBLC helped me achieve my dreams to become what I am today thats why I want to
                            thank them especially...."</h5> -->
                        <p>"UBLC helped me achieve my dreams to become what I am today thats why I want to
                            thank them especially....to become what I am today thats why I want to
                            thank them especially....to become what I am today thats why I want to
                            thank them especially...."</p>
                    </div>
                    <!-- <div class="button">
                        <a href=""><input type="button" value="Edit" name="edit"></a>
                    </div> -->
                </div>

                <div class="row">
                    <div class="leftcolumn">
                        <div class="card">
                            <h2>Educational Background</h2>
                            <h5>Educational Attainment</h5>
                            <!-- <div class="fakeimg" style="height:200px;">Image</div> -->
                            <!-- <p>Some text..</p> -->
                            <div class="rowCateg">
                                <p>Bachelor of Science in Information Technology</p>
                                <p style="width: 200px;">Date: May 19, 2020</p>
                            </div>

                            <h5>Seminar(s) / Training(s) Attended</h5>
                            <div class="rowCateg">
                                <p>AWS Siklab 2019</p>
                                <p style="width: 200px;">Date: September 19, 2019</p>
                            </div>

                            <h5>Professional License</h5>
                            <div class="rowCateg">
                                <p>Certified Information Technology Professional</p>
                                <p style="width: 200px;">Date: April 25, 2021</p>
                            </div>

                            <h5>Professional Certificate</h5>
                            <div class="rowCateg">
                                <p>Web Development Bootcamp 2020</p>
                                <p style="width: 200px;">Date: February 27, 2020</p>
                            </div>

                        </div>
                        <!-- <div class="button2">
                            <a href=""><input type="button" value="Edit" name="edit"></a>
                        </div> -->
                        <div class="card">
                            <h2>Employment Profile</h2>
                            <h5>Employment Status</h5>
                            <!-- <div class="fakeimg" style="height:200px;">Image</div> -->
                            <!-- <p>Some text..</p> -->
                            <p>Employed</p>
                            <h5>Employment Type</h5>
                            <p>Full - Time</p>
                            <h5>Employment Data</h5>
                            <p>Type of Organization : Corporation</p>
                            <p>Name of Business/Company : Accenture</p>
                            <p>Field of Work : Information Technology</p>
                            <p>Job Position : Manager</p>
                            <p>Place of Work : Makati</p>
                            <p>Employer : Jerry</p>
                            <p>Monthly Income : ₱5,000,000</p>
                            <p>Years Employed : 20 years</p>

                        </div>


                    </div>
                    <div class="rightcolumn">
                        <div class="card">
                            <h2 style="font-size: 32px;">General Information</h2>
                            <!-- <div class="fakeimg" style="height:100px;">Image</div> -->
                            <h5>Student Number</h5>
                            <p>1920774</p>
                            <h5>Email</h5>
                            <p>johndoe@gmail.com</p>
                            <h5>Contact Number</h5>
                            <p>09992223344</p>
                            <h5>Address</h5>
                            <p>Blk 9 Lot 1 Bugtong na Pulo Lipa City</p>
                            <h5>Birthday</h5>
                            <p>February 14, 2000</p>
                            <h5>Gender</h5>
                            <p>Male</p>
                            <h5>Civil Status</h5>
                            <p>Single</p>
                            <h5>Year Graduated</h5>
                            <p>2018</p>
                        </div>
                        <div class="card">
                            <h2>Expertise</h2>
                            <p>Java</p>
                            <p>HTML</p>
                            <p>CSS</p>
                            <p>VB.Net</p>
                            <p>C++</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../js/backend-bundle.min.js"></script>


    <script src="../js/app.js"></script>

    </script>

</body>

</html>