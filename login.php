<?php
session_start();


$conn = mysqli_connect("localhost", "root", "", "spicebazaar");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM customers 
          WHERE email='$email' 
          AND password='$password'";

$result = mysqli_query($conn, $query);


if(mysqli_num_rows($result) == 1)
{
    $row = mysqli_fetch_assoc($result);

 
    $_SESSION['customer_id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];

    
    header("Location: products.php");
    exit();
}
else
{
    echo "<script>
            alert('Invalid Email or Password');
            window.location.href='login.html';
          </script>";
}
?>