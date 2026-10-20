<?php
session_start();
$conn = mysqli_connect("localhost","root","","spicebazaar");

$product_id = $_GET['id'];

$product = mysqli_query($conn,"SELECT * FROM products WHERE id=$product_id");
$row = mysqli_fetch_assoc($product);

mysqli_query($conn,"INSERT INTO cart(product_name,quantity,price)
VALUES('{$row['product_name']}',1,'{$row['price']}')");

header("Location: cart.php");
?> 