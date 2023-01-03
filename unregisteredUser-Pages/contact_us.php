<?php
$host = 'localhost';
$username = "id19282385_gamer";
$password = "ZzafB<2Sx8AV5\%9";
$database = "id19282385_rgamingemporium";

$con = mysqli_connect($host, $username, $password, $database);


if($con->connect_error){
    echo $con->connect_error;
}

if(isset($_POST['submit'])){

    $uname = $_POST['uname'];
    $email = $_POST['emailadd'];
    $message = $_POST['message'];
   
    $data = $_POST;
   
    $insert = "INSERT INTO queries(`Username`, `Email`, `Message`) VALUES
            ('$uname', '$email', '$message')";
    
    echo ('<script>alert("Query Sent!")</script>');
    
$con->query($insert) or die ($con->error);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R Gaming Emporium</title>
    <link rel="stylesheet" href="../css/contact_us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="icon" href="./images/design images/Toad_3D_Land.png">
</head>

<body>
    <header>
        <a href="index.php" class="logo">
            <img style="position:relative; left:85px;top:12px" src="./images/rgamingemporium-removebg-preview.png" alt="">
        </a>
        <div class="navigation">
                <ul class="menu">
                    <div class="close-btn"></div>
                    <li class="menu-item"><a href="../index.php">Home</a></li>

                    <li class="menu-item"><a href="../index.php">About Us</a></li>
                    <li class="menu-item"><a href="products2.php">Products</a></li>
                    <li class="menu-item"><a href="#">Contact Us</a></li>


                    <div class="menu-item">

                        <a class="sub-btn" href="../login.php"> <i class="fas fa-shopping-cart"></i></a>
                    </div>
                    <li class="menu-item">
                        <a class="sub-btn" href="#"> <i class="fas fa-user"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-item"><a href="../login.php">Log In</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
    </header>
    <div style="margin-top: 50px;" class="center">
        <h1>Contact Us</h1>
        <form action="#" method="post">
            <div class="details">

                <div class="txt_field">

                    <input type="text" id="uname" name="uname" placeholder="Username" required>
                </div>
                <div class="txt_field">

                    <input type="email" name="emailadd" placeholder="Email" required>
                </div>
                <div class="txt_field">

                    <textarea placeholder="Enter your message" style="width:650px; border: 1px solid #ccc;" name="message" id="" cols="30" rows="10"></textarea>
                </div>


            </div>
            <div class="row">
                <div class="button">
                    <input type="submit" value="Send Message" name="submit" placeholder="Send Message">
                </div>
            </div>
        </form>
        <img style="width: 400px;height:450px;position:absolute;bottom:5px;left:800px" src="/images/design images/location.PNG" alt="">
        <footer>
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
        </footer>
    </div>

</body>

</html>