<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.html");
    exit();
}
?>

<h1>Welcome to Spice Bazaar</h1>

<ul>
    <li><a href="products.php">View Products</a></li>
    <li><a href="cart.php">My Cart</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>