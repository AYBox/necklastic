<?php
$style="body{
            margin-top: 50px;
        }
        div p{
            display:inline-block;
        }
        hr{
            border: black solid 1px;
            width: 300px;
            display: inline-block;
        }";
$title="Products";

include "top.php";
?>


    <h2>Products</h2>
    <hr>
    <div>
        <p>EZnecklastic</p>
        <a class="btn btn-primary" target="_blank" href="https://www.amazon.com/Necklastic-Neckline-Repair-Enough-T-Shirts/dp/B01A9GQMTW/ref=sr_1_19?m=A3EGQ1D5TCAPQW&s=merchant-items&ie=UTF8&qid=1498103156&sr=1-19">Buy Now on Amazon.com</a>
        <a class="btn btn-primary" href="retailers.php">Find a Retailer</a>
    </div>
    <hr>
    <div>
        <p>EZ Camp Labels</p>
        <a class="btn btn-primary" href="https://www.amazon.com/dp/B073WN4P6M" target="_blank">Buy Now on Amazon.com</a>
        <a class="btn btn-primary" href="retailers.php">Find a Retailer</a>
    </div>
    <hr>
    
<?php include "bottom.php"; ?>