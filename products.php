<?php

$conn = mysqli_connect("localhost","root","","spicebazaar");

$result = mysqli_query($conn,"SELECT * FROM products");

?>

<!DOCTYPE html>
<html>
<head>

<title>Spice Bazaar Products</title>

<style>

body{
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

h2{
    text-align:center;
    color:maroon;
    margin-top:20px;
}

.container{
    width:80%;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    margin-top:30px;
}

.card{
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0px 0px 10px lightgray;
    text-align:center;
}

.card img{
    width:100%;
    height:180px;
    object-fit:cover;
    border-radius:8px;
    margin-bottom:10px;
}

.price{
    color:green;
    font-size:20px;
    font-weight:bold;
}

.btn{
    background-color:maroon;
    color:white;
    padding:10px 15px;
    text-decoration:none;
    border-radius:5px;
}

.btn:hover{
    background-color:black;
}

</style>

</head>

<body>

<h2>Spices Available</h2>

<div class="container">

<?php while($row=mysqli_fetch_assoc($result)) { ?>

<div class="card">

<?php
if($row['product_name']=="Turmeric Powder")
{
    echo "<img src='turm.jpg'>";
}
elseif($row['product_name']=="Red Chilli Powder")
{
    echo "<img src='chill.jpg'>";
}
elseif($row['product_name']=="Cumin Seeds")
{
    echo "<img src='cum.jpg'>";
}
?>

<h3><?php echo $row['product_name']; ?></h3>

<p class="price">
₹<?php echo $row['price']; ?>
</p>

<a class="btn"
href="addtocart.php?id=<?php echo $row['id']; ?>">
Add to Cart
</a>

</div>

<?php } ?>

</div>

</body>
</html>