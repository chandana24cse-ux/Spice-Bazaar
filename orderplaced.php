<?php
session_start();

$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html>
<head>

<title>Order Placed</title>

<style>

body{
    font-family: Arial, sans-serif;
    background-color:#f4f4f4;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.box{
    background:white;
    padding:40px;
    width:600px;
    text-align:center;
    border-radius:12px;
    box-shadow:0px 0px 15px lightgray;
}

h1{
    color:green;
}

h2{
    color:maroon;
}

p{
    font-size:18px;
}

button{
    background-color:maroon;
    color:white;
    border:none;
    padding:12px 25px;
    border-radius:5px;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    background-color:black;
}

</style>

</head>

<body>

<div class="box">

<h1>✓ Order Placed Successfully!</h1>

<h2>Welcome, <?php echo $name; ?>!</h2>

<p>
Thank you for shopping with Spice Bazaar.
</p>

<p>
Your order has been received and will be delivered soon.
</p>

<p>
Have a wonderful day and visit again!
</p>

<a href="ecommerce.php">
    <button>Continue Shopping</button>
</a>

</div>

</body>
</html>