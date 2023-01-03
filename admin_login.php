<?php
session_start();

if (!isset($_SESSION)) {
    session_start();
}

$host = 'localhost';
$username = "root";
$password = "";
$database = "bantayit_gts";

$con = new mysqli($host, $username, $password, $database);

if ($con->connect_error) {
    echo $con->connect_error;
}

ini_set("display_errors", 1);
error_reporting(E_ALL);
error_reporting(0);


if (isset($_POST['login'])) {

    $adminID = $_POST['adminID'];
    $pw = $_POST['password'];
    // $data = $_POST;


    $insert = "SELECT * FROM `admin_account` WHERE `AdminID` = '$adminID' AND `Password` = '$pw'";
    $user = $con->query($insert) or die($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;

    if ($total > 0) {
        $_SESSION['AdminID'] = $row['AdminID'];
        echo '<script>alert("Logged In Successfully!")</script>';
        die("<script>window.location = 'admin_dashboard.php';</script>");
    } else {
        echo '<script>alert("Incorrect ID or Password")</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B a n t a y I T</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="icon" href="./images/UBlogo.png">
</head>

<body>
    <header>
        <a href="login.php" class="logo">
            <img src="./images/UBlogo.png" alt="">
        </a>
        <h1 style="color: white; position: relative; right: 120px">

            Bantay IT : Graduate Tracer
        </h1>

        <h2 style="color: #F9AE3B; position: relative; left: 450px; bottom: 15px">ADMIN</h2>
        <a style="text-decoration: none;" href="login.php">
            <h3 style="color: white; position: relative; top: 20px; left: 95px;">Alumni</h3>
        </a>
        <a style="text-decoration: none;" href="">
            <h3 style="color: white; position: relative; top: 20px; left: 50px;">Admin</h3>
        </a>
        <a style="text-decoration: none;" href="partner_login.php">
            <h3 style="color: white; position: relative; top: 20px; ">Partner</h3>
        </a>


    </header>
    <div class="center">
        <h1>Log In</h1>
        <hr>
        <form action="" method="post">
            <div class="details">

                <div class="txt_field">
                    <label for="username">ID Number</label>
                    <input type="text" id="username" name="adminID" required>
                </div>
                <div class="txt_field">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="password" required>
                </div>

            </div>
            <div class="rememberme">
                <!-- <input type="checkbox" name="rememberme" id="rememberme"> -->
                <!-- <a style="text-decoration: none; color: Black; position: relative; left: 140px;" href="">Forgot Password?</a> -->

            </div>
            <div class="button">
                <a href=""><input type="submit" value="Log In" name="login"></a>
            </div>
            <!-- <div class="no_acc">
                Don't have an account? <a href="registration.php">Sign up</a>
            </div> -->

        </form>
        <!-- <div  class="cat">
            </div> -->


    </div>
    <img style="border-radius: 50px 50px 50px 50px; width:40%; position: relative; left: 740px; top: 140px; height:400px; width: 575px" src="./images/admin.png" alt="">
    <!-- <footer>
        <div class="company-info">
            <h5>R Gaming Emporium</h5>
            <p class="address">The Outlets,<br>
                Malvar, Batangas, <br>
                4233, Philippines</p>
        </div>
        <div class="contact" id="contact">
            <h5>EMAIL US</h5>
            <div class="contact-links">
                <p class="address">0977-983-642</p>
                <p class="address">rgamingemporium@gmail.com</p>
            </div>
        </div>
    </footer> -->
</body>

</html>