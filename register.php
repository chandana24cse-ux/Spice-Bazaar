<?php

$conn=mysqli_connect("localhost","root","","spicebazaar");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$sql="INSERT INTO customers(name,email,password,phone,address)
VALUES('$name','$email','$password','$phone','$address')";

if(mysqli_query($conn,$sql))
{
    echo "<script>
            alert('Registration Successful');
            window.location.href='login.html';
          </script>";
}
else
{
    echo "Registration Failed";
}

?>