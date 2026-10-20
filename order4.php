<?php

$qty1 = $_POST['qty1'];
$qty2 = $_POST['qty2'];
$qty3 = $_POST['qty3'];

$total1 = $qty1 * 199;
$total2 = $qty2 * 180;
$total3 = $qty3 * 120;

$discount1 = $total1 * 20 / 100;
$discount2 = $total2 * 10 / 100;

$subtotal =
($total1 - $discount1) +
($total2 - $discount2) +
$total3;

$gst = $subtotal * 5 / 100;

$grandTotal = $subtotal + $gst;
?>

<html>
    <head>
        <title>Spice Bazaar Bill</title>
        <style>
            body{
        font-family: Arial;
        background-color:#f5f5f5;
        text-align:center;
        margin-top:100px;
    }

    .bill{
        width:400px;
        margin:auto;
        background:white;
        padding:20px;
        border-radius:10px;
        box-shadow:0px 0px 10px gray;
    }

    h2{
        color:maroon;
    }

    h3{
        color:green;
    }
    .discount{
        color:red;
        font-weight:bold;
    }
    </style>
<body>
<div class="bill">

<h2>Spice Bazaar Bill</h2>

<p>Turmeric Total : ₹ <?php echo $total1; ?></p>

<p class="discount">
    Turmeric Discount (20%) : ₹ <?php echo $discount1; ?>
</p>

<p>Turmeric After Discount : ₹ <?php echo $total1 - $discount1; ?></p>

<hr>

<p>Red Chilli Total : ₹ <?php echo $total2; ?></p>

<p class="discount">
    Red Chilli Discount (10%) : ₹ <?php echo $discount2; ?>
</p>

<p>Red Chilli After Discount : ₹ <?php echo $total2 - $discount2; ?></p>

<hr>

<p>Cumin Seeds Total : ₹ <?php echo $total3; ?></p>

<p>No Discount Applied</p>

<hr>

<p>Subtotal : ₹ <?php echo $subtotal; ?></p>

<p>GST (5%) : ₹ <?php echo $gst; ?></p>

<h3>Grand Total : ₹ <?php echo $grandTotal; ?></h3>

</div>
</body>
</html>