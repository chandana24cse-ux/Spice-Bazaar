<?php

$conn = mysqli_connect("localhost","root","","spicebazaar");

$result = mysqli_query($conn,"SELECT * FROM cart");

$subtotal = 0;

?>

<!DOCTYPE html>
<html>
<head>
<title>Spice Bazaar Cart</title>

<style>

body{
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

.cart-container{
    width: 700px;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px lightgray;
}

h2{
    text-align: center;
    color: maroon;
}

.item{
    padding: 10px;
    margin-bottom: 10px;
    border-bottom: 1px solid lightgray;
}

.remove-btn{
    color: red;
    text-decoration: none;
    font-weight: bold;
    margin-left: 15px;
}

.remove-btn:hover{
    color: darkred;
}

.bill{
    margin-top: 20px;
}

button{
    background-color: maroon;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover{
    background-color: black;
}

.total{
    color: green;
    font-size: 24px;
}

</style>

</head>

<body>

<div class="cart-container">

<h2>Your Cart</h2>

<?php
while($row = mysqli_fetch_assoc($result))
{
    $subtotal += $row['price'] * $row['quantity'];
?>

<div class="item">

    <?php echo $row['product_name']; ?>
    - ₹<?php echo $row['price']; ?>
    x <?php echo $row['quantity']; ?>

    <a class="remove-btn"
       href="remove.php?id=<?php echo $row['cart_id']; ?>">
       Remove
    </a>

</div>

<?php
}
?>

<?php

$discount = $subtotal * 0.10;

$after_discount = $subtotal - $discount;

$gst = $after_discount * 0.18;

$final_total = $after_discount + $gst;

?>

<hr>

<div class="bill">

<h3>Subtotal: ₹<?php echo $subtotal; ?></h3>

<h3>Discount (10%): -₹<?php echo $discount; ?></h3>

<h3>After Discount: ₹<?php echo $after_discount; ?></h3>

<h3>GST (18%): +₹<?php echo $gst; ?></h3>

<hr>

<h2 class="total">
Final Total: ₹<?php echo number_format($final_total,2); ?>
</h2>

</div>

<a href="clearcart.php">
<button>Clear Cart</button>
</a>
<br><br>
<a href="orderplaced.php">
<button>Order Now</button>
</a>

</div>

</body>
</html>