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
    $pw = $_POST['password'];
    $cpw = $_POST['cpassword'];
    $data = $_POST;
    $duplicate=mysqli_query($con,"select * from registered_accounts where Username='$uname' ");
    if (mysqli_num_rows($duplicate)>0)
    {
        echo ('<script>alert("User name already exists!")</script>');
        echo("<script>window.location = 'registration.php';</script>");
    } else{
        
    $insert = "INSERT INTO registered_accounts(`Username`, `Email`, `Password`, `ConfirmPassword`) VALUES
            ('$uname', '$email', '$pw','$cpw')";
            
 if ($data['password'] !== $data['cpassword']) {
        echo ('<script>alert("Password and Confirm password should match!")</script>');
        echo("<script>window.location = 'registration.php';</script>");
     
     } else{
         
        echo ('<script>alert("Registered!")</script>');
        echo("<script>window.location = 'indexRegistered.php';</script>");
     
     }
        
    }
   

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
    <link rel="stylesheet" href="./css/registration.css">
    <link rel="icon" href="./images/design images/Toad_3D_Land.png">
</head>

<body>
     <header>
        <a href="index.php" class="logo">
            <img  src="/images/rgamingemporium-removebg-preview.png" alt="">
        </a>
        
    </header>
    <div class="center">
        <h1>Registration Form</h1>
        <hr>
        <form action="#" method="post">
            <div class="details">

                <div class="txt_field">
                    <label for="uname">Username</label>
                    <input type="text" id="uname" name="uname" required>
                </div>
                <div class="txt_field">
                    <label>Email</label>
                    <input type="email" name="emailadd" required>
                </div>
                <div class="txt_field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="txt_field">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" required>
                </div>
                <div class="areyouregistered">
                    Already registered? <a href="login.php"> Click here!</a>
                </div>
                

            </div>
            <div class="row">

                <div class="button">
                    <input type="submit" value="Register" name="submit">
                </div>
                <div class="buttonClear">
                    <input type="reset" value="Clear" name="submit">
                </div>
            </div>


        </form>
        <img src="./images/design images/Toad_3D_Land.png" alt="">
    </div>
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
</body>

</html>