<?php

$conn = mysqli_connect("localhost","root","","spicebazaar");

mysqli_query($conn,"DELETE FROM cart");

header("Location: cart.php");

?>