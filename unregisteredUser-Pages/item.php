<?php 
// @include 'config.php';

$host = 'localhost';
$username = "id19282385_gamer";
$password = "ZzafB<2Sx8AV5\%9";
$database = "id19282385_rgamingemporium";

$con = mysqli_connect($host, $username, $password, $database);


if($con->connect_error){
    echo $con->connect_error;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R Gaming Eporium</title>
    <link rel="icon" href="/images/design images/Toad_3D_Land.png">
    <link rel="stylesheet" href="/css/item.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>

    <section>
        <header>
            <a href="#" class="logo">
                <img 
                src="/images/rgamingemporium-removebg-preview.png" alt="">
            </a>
            <div class="navigation">
                <ul class="menu">
                    <div class="close-btn"></div>
                    <li class="menu-item"><a href="/index.php">Home</a></li>
                    
          
                    <!-- <li class="menu-item"><a href="#">Services</a></li> -->
                    <li class="menu-item"><a href="#">About Us</a></li>
                    <li class="menu-item"><a href="/unregisteredUser-Pages/products2.html">Products</a></li>
                    <li class="menu-item"><a href="#">Contact Us</a></li>

                
                    <div class="menu-item">
    
                        <a class="sub-btn" href="#"> <i class="fas fa-shopping-cart"></i></a>
                    </div>
                    <li class="menu-item">
                        <a class="sub-btn" href="#"> <i class="fas fa-user"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-item"><a href="/login.php">Sign In</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-btn"></div>
        </header>
 <?php
  
            $select_products = mysqli_query($con, "SELECT * FROM products LIMIT 1");
            if (mysqli_num_rows($select_products) > 0) { 
                // $row = 0;
                
                // foreach($select_products as $row){
                //     $row = mysqli_fetch_assoc($select_products)
         
            
                while ($row = mysqli_fetch_assoc($select_products)) {
        ?>
        <div class="content">
            <div class="info">
                <h2><?php echo $row['name']; ?><br><span></span></h2>
                <p>Price:    ₱<?php echo $row['price']; ?></p>
                <p>Stock:    <span>In stock</span></p>
                <p>Quantity: 1</p>
                <a href="/RGAMINGEMPORIUM/login.php" class="info-btn">Add to cart</a>
            </div>
            <img id="content_image"
                src=../images/products/<?php echo $row['image']; ?> alt="">
        </div>
        <div class="about_content" id="about_content">
            <div class="about_info">
                <h2>Item Description<br><span></span></h2>
                <p><?php echo $row['description']; ?>
                </p>
            </div>
        </div>
        <?php
                                        };
                                    } else {
                                        echo "<div class='empty'>no product added</div>";
                                    };
                                    ?>
      
        <footer style="margin-top: 475px;">
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

    </section>

</body>

</html>