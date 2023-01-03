<?php 

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>R Gaming Emporium</title>
    <link rel="icon" href="/RGAMINGEMPORIUM/images/design images/Toad_3D_Land.png">
    <link rel="stylesheet" href="/css/products2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <div id="wrapper">
        <!--<div id="checkout">-->
        <!--    CHECKOUT-->
        <!--</div>-->
        <header>
            <a href="../index.php" class="logo">
                <img src="/images/rgamingemporium-removebg-preview.png" alt="">
            </a>
            <div class="navigation">
                <ul class="menu">
                    <div class="close-btn"></div>
                    <li class="menu-item"><a href="/index.php">Home</a></li>


                    <li class="menu-item"><a href="/index.php">About Us</a></li>
                    <li class="menu-item"><a href="/index.php">Products</a></li>
                    <li class="menu-item"><a href="contact_us.php">Contact Us</a></li>

                    <div class="menu-item">

                        <a class="sub-btn" href="/login.php"> <i class="fas fa-shopping-cart"></i></a>
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

        <div id="sidebar">

            <h3>CATEGORIES</h3>
            <div class="checklist categories">
                <ul>
                    <li><a href=""><span></span>All Products</a></li>
                    <li><a href=""><span></span>New Arrivals</a></li>
                    <li><a href=""><span></span>Game Consoles</a></li>
                    <li><a href=""><span></span>Video Games</a></li>
                    <li><a href=""><span></span>Merchandise</a></li>
                    <li><a href=""><span></span>Figurines</a></li>
                </ul>
            </div>
          
        </div>


        <div id="grid">
        <?php

            $select_products = mysqli_query($con, "SELECT * FROM products");
            if (mysqli_num_rows($select_products) > 0) { 
                
                while ($row = mysqli_fetch_assoc($select_products)) {
        ?>
            <div class="product">
               
                <div class="make3D">
                    <div class="product-front">
                        <form action="" method="post">
                            <div class="shadow"></div>
                            <img style="margin-top: 100px;" name="image" src=../images/products/<?php echo $row['image']; ?> alt="" />
                            
                            <div class="stats">
                                <div class="stats-container">
                        
                                    <span name="price" class="product_price">₱<?php echo $row['price']; ?></span>
                                    
                                    <span class="product_name"><?php echo $row['name']; ?></span> 
                                   
                                    <p><?php echo $row['category']; ?></p>
                       
                                    
                                    <div class="row">
                                      
                                        <a href="maintenance.php" class="info-btn">View Details</a>
                                      
                                        <a href="/login.php" class="info-btn">Add to cart</a>
                               
                                      
                                    </div>
    
                         
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <?php
                                        };
                                    } else {
                                        echo "<div class='empty'>no product added</div>";
                                    };
                                    ?>
        </div>
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
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="../js/script.js"></script>

</body>

</html>