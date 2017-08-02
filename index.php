<?php
$style="body{
            margin-top: 50px;
        }
        .left-text{
            font-size: 18px;
        }
        #rightDiv{
            text-align: center;
            font-size: 25px;
            text-overflow: clip; 
        }
        #ezlabelWell{
            background-color: green;
            color: yellow;
            border: 3px solid blue;
        }
        @media (min-width: 992px){
             #ezlabelWell{
                position: absolute;
                right: 10px;
                top: 85px;
                transform: rotate(20deg);
            }
        }
        .jumbotron h2{
            z-index: 2;
        }
        #hrefEzLabels{
            color: yellow;
        }";
$title="EZnecklastic";

include "top.php";
?>

    <div class="jumbotron">
        <h1>EZnecklastic</h1>
        <h2>
            Fixes stretched out necklines on shells and t-shirts!<br>
            Prevents neckline on new or used t-shirts from stretching out.
        </h2>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img class="img-responsive center-block" src="images/beforeAfter.jpg" alt="Before &amp; After">
        </div>
        <div class="col-md-6">
            <img class="img-responsive center-block" src="images/packageFront.jpg" alt="EZnecklastic">
        </div>
        <div id="rightDiv" class="col-md-3">
            <a class="btn btn-primary" id="buyButton" target="_blank" href="https://www.amazon.com/Necklastic-Neckline-Repair-Enough-T-Shirts/dp/B01A9GQMTW/ref=sr_1_19?m=A3EGQ1D5TCAPQW&s=merchant-items&ie=UTF8&qid=1498103156&sr=1-19">Buy Now!</a>
            <img class="img-responsive center-block" src="images/package&roll.jpg" alt="package &amp; roll of EZnecklastic">
        </div>
    </div>
    <div class="row">
        <div id="ezlabelWell" class="well col-md-4">
            <h2><a id="hrefEzLabels" href="products.php">Introducing Brand New Product! EzLabels</a></h2>
                <p>
                    Self sticking labels for all your personal belongings. Adheres to most surfaces including clothing, electronics, books etc. Easy to write on with any pen or marker.
                <p>
        </div>
    </div>
    <div class="row>
        <p class="text-justify">
            EZNecklastic is a new innovative method for repairing stretched out necklines on t-shirts. The simple step by step instructions will show you how to easily insert the included ultra-thin, transparent, stretchy, &amp; good memory elastic through the neckline, using just your bare hands and the included dull-pointed needle. Kit includes 15 meters of elastic (enough for aprox. 20 necklines), needle, &amp; clear instructions.
        </p>
    </div>
 
<?php include "bottom.php"; ?>