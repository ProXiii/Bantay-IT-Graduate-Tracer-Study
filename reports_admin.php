<?php 


$host = 'localhost';
$username = "id19282385_gamer";
$password = "ZzafB<2Sx8AV5\%9";
$database = "id19282385_rgamingemporium";

$con = mysqli_connect($host, $username, $password, $database);


if($con->connect_error){
    echo $con->connect_error;
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "id19282385_gamer", "ZzafB<2Sx8AV5\%9", "id19282385_rgamingemporium");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM queries WHERE CONCAT(Id, Username, Email,Message) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `queries`";
    $search_result = filterTable($query);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>R Gaming Emporium</title>

    <link rel="stylesheet" href="./css/admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="  ">

    <div class="wrapper">

        <div class="iq-sidebar  sidebar-default ">
            <div style="height: 75px;" class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="../backend/index.html" class="header-logo">
                    <img style="height: 60px; width:175px; position: relative;left: 35px;" src="./images/rgamingemporium-removebg-preview.png" class="img-fluid rounded-normal light-logo" alt="logo">
                    <h5 class="logo-title light-logo ml-3"></h5>
                </a>

            </div>
            <div style="padding-top: 20px;" class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="">
                            <a href="admin.php" class="svg-icon">
                                <svg class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#226A80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span style="color: #226A80;" class="ml-4">Dashboard</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#return" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#226A80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span style="color: #226A80;" class="ml-4">Items</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#226A80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="return" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                    <a href="items_admin.php">
                                        <i class="las la-minus"></i><span style="color: #226A80;">Add Item</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./registeredUser-Pages/products2.php">
                                        <i class="las la-minus"></i><span style="color: #226A80;">View Items</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class=" ">
                            <a href="users_admin.php" class="">
                                <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#226A80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span style="color: #226A80;" class="ml-4">Users</span>

                            </a>

                        </li>
                        <li class="active">
                            <a href="reports_admin.php" class="">
                                <svg class="svg-icon" id="p-dash7" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#226A80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span style="color: #226A80;" class="ml-4">Queries</span>
                            </a>
                            <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <li class="">
                            <a href="indexRegistered.php" class="">
                                <svg class="svg-icon" id="p-dash6" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="#226A80" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="4 14 10 14 10 20"></polyline>
                                    <polyline points="20 10 14 10 14 4"></polyline>
                                    <line x1="14" y1="10" x2="21" y2="3"></line>
                                    <line x1="3" y1="21" x2="10" y2="14"></line>
                                </svg>
                                <span style="color: #226A80;" class="ml-4">View Website</span>
                            </a>
                            <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>

                </nav>

                <div class="p-3"></div>
            </div>
        </div>
        <header style="height:75px">

            <div style="position:relative;left:725px;top: 8px;" class="navigation">
                <ul class="menu">
                    <!--<div class="close-btn"></div>-->
                    <!--<li class="menu-item"><a href="index.php">Home</a></li>-->


                    <!--<li class="menu-item"><a href="#">About Us</a></li>-->
                    <!--<li class="menu-item"><a href="#">Contact Us</a></li>-->


                    <li style="position:relative;left:420px" class="menu-item">
                        <a class="sub-btn" href="#"> <i class="fas fa-user"></i></a>
                        <ul style="width: 135px;" class="sub-menu">
                            <li style="position: relative; right:5px" class="sub-item"><a href="login.php">Log Out</a></li>
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
                                <h3 style="color: #226A80;" class="mb-3">Queries</h3>
                                <p style="width: 600px;" class="mb-0 mr-4">
                                    The query list provides
                                    space to list your users inquiry or complaints in the most appealing way.</p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                     <form action="reports_admin.php" method="post">
                         <div style="width:650px" class="txt_field">
                             <input style="padding-left:15px" type="text" name="valueToSearch" placeholder="Enter value to search"><br><br>
                         </div>
               
                             <div  style="position:relative;left:650px;bottom: 87px"  class="row">
                <div class="button">
                    <input type="submit" value="Search" name="search" >
                </div>
            </div>
                     
                        <table style="margin-top: -75px;width: 1000px;" class="rwd-table">
                            <tbody>
                                <tr>
                                   
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    

                                </tr>
                                <?php while($row = mysqli_fetch_array($search_result)):?>
                                <tr>
                                    
                                   
                                   <td><?php echo $row['Id']; ?></td>
                                    <td><?php echo $row['Username']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Message']; ?></td>
                                    
                                </tr>
                             
                                     <?php endwhile;?>

                            </tbody>
                        </table>
                        </form>
                    </div>

                </div>
            </div>


            <script src="./js/backend-bundle.min.js"></script>


            <script src="./js/app.js"></script>

            </script>

</body>

</html>