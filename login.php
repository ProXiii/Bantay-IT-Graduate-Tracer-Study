<?php
session_start();
include("connection.php");
include("functions.php");

// $user_data = check_login($con);
// $user_form = check_form($con);

// if (!isset($_SESSION)) {
//     session_start();
// }


// $host = 'localhost';
// $username = "root";
// $password = "";
// $database = "bantayit_gts";

// $con = new mysqli($host, $username, $password, $database);

// if ($con->connect_error) {
//     echo $con->connect_error;
// }

// if($_SERVER['REQUEST_METHOD'] == "POST")



if (isset($_POST['login'])) {

    $stuNum = $_POST['stuNum'];
    $pw = $_POST['password'];
    // $data = $_POST;


    $insert = "SELECT * FROM `alumni_accounts` WHERE `StudentID` = '$stuNum' AND `Password` = '$pw'";
    $user = $con->query($insert) or die($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;

    $insert2 = "SELECT * FROM `form_answers` WHERE `alumni_StudentNumber` = '$stuNum'";
    $user2 = $con->query($insert2) or die($con->error);
    $row2 = $user2->fetch_assoc();
    $total2 = $user2->num_rows;

    if ($total > 0) {
        $_SESSION['StudentID'] = $row['StudentID'];
        echo '<script>alert("Logged In Successfully!")</script>';
        header("Location: alumni_form.php");
        if ($total2 > 0) {
            $_SESSION['alumni_StudentNumber'] = $row2['alumni_StudentNumber'];
            if (!isset($_SESSION['alumni_StudentNumber'])) {
                header("Location: alumni_form.php");
                die;
            } else {
                header("Location: alumni_dashboard.php");
                die;
            }
        }



        // $_SESSION['USERLOGIN'] = $row['StudentID'];
        // $_SESSION['ACCESS'] = $row['Password'];

        // $_SESSION['success'] = "You have logged in!";






        // die("<script>window.location = 'alumni_dashboard.php';</script>");

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
        <a href="index.php" class="logo">
            <img src="./images/UBlogo.png" alt="">
        </a>
        <h1 style="color: white; position: relative; right: 120px">

            Bantay IT : Graduate Tracer
        </h1>

        <h2 style="color: #F9AE3B; position: relative; left: 450px; bottom: 15px">ALUMNI</h2>
        <a style="text-decoration: none;" href="">
            <h3 style="color: white; position: relative; top: 20px; left: 95px;">Alumni</h3>
        </a>
        <a style="text-decoration: none;" href="admin_login.php">
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
                    <label for="username">Student Number</label>
                    <input type="text" id="username" name="stuNum" required>
                </div>
                <div class="txt_field">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="password" required>
                </div>

            </div>
            <div class="rememberme">
                <!-- <input type="checkbox" name="rememberme" id="rememberme"> -->
                <a style="text-decoration: none; color: Black; position: relative; left: 150px;" href="contact_Us.php">Forgot password?</a>

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
    <img style="border-radius: 50px 50px 50px 50px; width:40%; position: relative; left: 740px; top: 140px; height:400px; width: 575px" src="./images/lipa.jpg" alt="">
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