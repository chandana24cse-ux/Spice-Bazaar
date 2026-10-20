<!DOCTYPE html>
<html>
<head>
    <title>Spice Bazaar</title>
       <meta charset="UTF-8">
    <style>

        body{
            font-family: Arial;
            margin: 0;
            background-color: white;
            text-align: center;
        }
        
        
        
        header{
            background-color: maroon;
            color: white;
            padding: 15px;
        }

        nav a{
            color: rgb(196, 36, 36);
            padding: 14px 20px;
            display: inline-block;
            text-decoration: none;
        }

        nav a:hover{
            background-color: black;
            cursor: pointer;
        }

        .container{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 20px;
            padding: 20px;
        }

        .card{
            background: white;
            padding: 15px;
            border-radius: 10px;
            position: relative;
            text-align: center;
            box-shadow: 0px 0px 10px lightgray;
        }

        .card img{
            width: 100%;
            height: 150px;
        }

        .discount{
            position: absolute;
            top: 10px;
            left: 10px;
            background: red;
            color: white;
            padding: 5px;
            font-size: 12px;
        }

        input{
            width: 60px;
            padding: 5px;
            margin-top: 5px;
        }

        button{
            margin-top: 10px;
            padding: 8px 15px;
            background-color: maroon;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        footer{
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        .img1{
            position:absolute;
            top:0;
            left:0;
            width:85px;
            z-index:1;
        }

        .img2{
            position:absolute;
            top:3px;
            left:5px;
            width:85px;
            z-index:2;
        }

    </style>

</head>

<body onload="pageLoaded()">

<h2 onclick="titleClick()">Select Your Spice</h2>

<header>

    <h1 ondblclick="headerDouble()">Spice Bazaar</h1>

    <p>Authentic Indian Spices Store</p>

</header>

<nav>

    <a href="#home">Home</a>
    <a href="register.html">Register</a>

     <a href="login.html">login</a>
    
    <a href="wed1.html">Wednesday Deals</a>

    <a href="contact1.html">Contact</a>

</nav>
<form action="order4.php" method="post">
    

<div class="container">

    
    <div class="card">

        <div class="discount">20% OFF</div>

        <img src="turmeric1.png"
        onmouseover="imgOver()">

        <h3 onclick="focusMsg()">Turmeric Powder</h3>

        <p>Price: ₹199</p>

        <p>Quantity:</p>

        <input type="number" id="qty1" name="qty1" value="0">

        <br>

       
    </div>


    
    <div class="card">

        <div class="discount">10% OFF</div>

        <img src="chilli2.png"
        onmouseout="imgOut()">

        <h3>Red Chilli Powder</h3>

        <p>Price: ₹180</p>

        <p>Quantity:</p>

        <input type="number" id="qty2" name="qty2" value="0">

        <br>

        

    </div>


    
    <div class="card">

        <div class="discount">No Discount</div>

        <img src="cumin1.png"
        onmouseenter="enterMsg()">

        <h3>Cumin Seeds</h3>

        <p>Price: ₹120</p>

        <p>Quantity:</p>

        <input type="number" id="qty3"  name="qty3" value="0">

        <br>

        

    </div>

</div>
<button type="button" onclick="window.location.href='register.html' ">Buy Now</button>
</form>

<img src="offer1.png" class="img1">

<img src="offer2.png" class="img2">


<script>

 function pageLoaded()
{
    alert("Page Loaded");
}

function titleClick()
{
    alert("Title Clicked");
}

function headerDouble()
{
    alert("Header Double Clicked");
}

function imgOver()
{
    alert("Mouse Over Image");
}

function imgOut()
{
    alert("Mouse Out Image");
}

function focusMsg()
{
    alert("Input Focused");
}

function blurMsg()
{
    alert("Input Lost Focus");
}

function changeMsg()
{
    alert("Value Changed");
}

function keyUpMsg()
{
    alert("Key Released");
}

function mouseDownMsg()
{
    alert("Mouse Button Pressed");
}
function enterMsg()
{
    alert("Mouse Entered");
}

</script>


<footer id="contact">

    <p>© 2026 Spice Bazaar | All Rights Reserved. Approved by ITC</p>

</footer>

</body>
</html>