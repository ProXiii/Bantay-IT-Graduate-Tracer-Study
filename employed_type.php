<?php
session_start();

include("connection.php");
include("functions.php");

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

if (isset($_POST['Submit'])) {


    $alumni_Type = $_POST['Type'];
    $i = 0;
    while ($i < count($alumni_Type)) {
        echo $alumni_Type[$i], ", \n";
        $i++;
    }

    $insert_query = ("INSERT INTO `employed_type`( `Type`)
    VALUES(
        '$alumni_Type')") or die('query failed');
};



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B a n t a y I T</title>
    <link rel="stylesheet" href="alumni_form.css">
    <link rel="icon" href="./images/UBlogo.png">
</head>

<body>
    <header>
        <a href="login.php" class="logo">
            <img src="./images/UBlogo.png" alt="">
        </a>
        <h1 style="color: white; position: relative; right: 265px">

            Bantay IT : Graduate Tracer
        </h1>

        <h2 style="color: #F9AE3B; bottom: 15px">ALUMNI FORM</h2>
 

    </header>
    <div class="center">
 
        <form action="code.php" method="post">

            <div style="margin-top: 40px;" class="details">
                <h1>D. Employment Profile</h1>
                <hr>
                    <label>EMPLOYMENT TYPE :</label>

                    <input type="checkbox" name="Type[]" value="Full - Time" for="Status">Full – Time
                    <input style="margin-left: 35px;" type="checkbox" name="Type[]" value="Part - Time" for="Status2">Part – Time
                    <input style="margin-left: 35px;" type="checkbox" name="Type[]" value="Freelance" for="Status3">Freelance

                </div>
            </div>

            <div style="width: 700px; position:relative; left:525px " class="button">
                <a href=""><input type="submit" value="Submit" name="Submit"></a>
            </div>

            <!-- left:475px -->
            <!-- right:225px -->

        </form>

    </div>
    <script src="script.js"></script>
</body>

</html>