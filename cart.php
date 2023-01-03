
<?php

$host = 'localhost';
$username = "id19282385_gamer";
$password = "ZzafB<2Sx8AV5\%9";
$database = "id19282385_rgamingemporium";

$con = mysqli_connect($host, $username, $password, $database);


if($con->connect_error){
    echo $con->connect_error;
}

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($con, "UPDATE cart SET Quantity = '$update_value' WHERE Id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($con, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($con, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>R Gaming Emporium</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


   <link rel="stylesheet" href="css/cart.css">

</head>
<body>
<header>
            <a href="../indexRegistered.php" class="logo">
                <img src="/images/rgamingemporium-removebg-preview.png" alt="">
            </a>
            <div style="position:relative;left:15px" class="navigation">
                <ul class="menu">
                    <div class="close-btn"></div>
                    <li class="menu-item"><a style="font-size:16px" href="/indexRegistered.php">Home</a></li>


                    <li class="menu-item"><a style="font-size:16px" href="/indexRegistered.php">About Us</a></li>
                     <li class="menu-item"><a style="font-size:16px" href="/registeredUser-Pages/products2.php">Products</a></li>
                    <li class="menu-item"><a style="font-size:16px" href="/contact_us.php">Contact Us</a></li>


                    <div class="menu-item">
                        <?php
                         $select_rows = mysqli_query($con, "SELECT * FROM cart") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);
      
      ?>
                        <a class="sub-btn" href="/cart.php"> <i style="font-size:16px" class="fas fa-shopping-cart"></i><span style="margin-left:5px;font-size:16px"><?php echo $row_count; ?></span></a>
                    </div>
                    <li class="menu-item">
                        <a class="sub-btn" href="#"> <i style="font-size:16px" class="fas fa-user"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-item"><a style="font-size:16px" href="/login.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-btn"></div>
        </header>


<div style="margin-left:200px;margin-bottom:100px" class="container">
                     
                        <table style="margin-top: 125px;width: 1000px;" class="rwd-table">
                            <tbody style="font-size:16px">
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                    <th>Action</th>
                                </tr>
                                <?php 
         
         $select_cart = mysqli_query($con, "SELECT * FROM cart");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

                                            <tr>
            <td><img src="./images/products/<?php echo $fetch_cart['Image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['Name']; ?></td>
            <td>$<?php echo number_format($fetch_cart['Price']); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['Id']; ?>" >
                  <input type="number" style="padding-left:50px;text-align:center" name="update_quantity" min="1"  value="<?php echo $fetch_cart['Quantity']; ?>" >
                  <input type="submit" style="position:relative;left:110px" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>$<?php echo $sub_total = number_format($fetch_cart['Price'] * $fetch_cart['Quantity']); ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['Id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn" style="width:250px; position:relative; left:25px"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
                                   <?php
        
            };
         };
         ?>
            
            <tr class="table-bottom">
            <td><a href="./registeredUser-Pages/products2.php" class="option-btn" style="margin-top: 0; width:250px;position:relative;top:100px">continue shopping</a></td>
       
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"  style="width:250px; position:relative; top:100px; left: 450px"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>
          
                            </tbody>
                        </table>
                        <div style="width:250px;position:relative; top:38px;left:350px" class="checkout-btn">
      <a href="./registeredUser-Pages/maintenance.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
   </div>
                    </div>
   
<script src="js/script.js"></script>

</body>
</html>