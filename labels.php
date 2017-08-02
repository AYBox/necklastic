<?php
$style="body{
            margin-top: 80px;
        }
        input [name=\"rows\"]{
            width: 2em;
        }
        .well{
            margin-top:30px;
        }
        input[type=\"number\"]{
            width: 65px;
        }
        /*img{
            width: 100%;
        }*/
        #retailerButton {
            margin: 10px;    
        }";
$title="Wholesale";

include "top.php";
?>
<div class="row">
    <div class="col-md-4 col-xs-12 text-center">
        <a id="retailerButton" class="btn btn-primary" href="retailers.php">Find an EZ Camp Label Retailer</a>
        <a id="retailerButton" class="btn btn-primary" href="https://www.amazon.com/dp/B073WN4P6M" target="_blank">Buy Now on Amazon.com</a>
        <img class="img-responsive" src="images/EZlabelPackageFront.png" alt="EZ label Package Front image">
    </div>
    <div class="col-md-4 col-xs-12">
        <h3 class="text-center">Sample Hand-Written Labels</h3>
        <img class="img-responsive" src="images/labelTemplateJoeMercer.jpg" alt="EZ label template image">
    </div>
    <div class="well col-md-3 col-md-offset-1 col-xs-12">    
        <h2 class="text-center">Coming soon! Printable EZ Camp Labels</h2>
        <form class="form" action="labelsPreview.php" class="form-inline text-center">
            <h3 class="text-center">Enter text to print on labels</h3>
            <div class="form-group text-left">
                <label for="line1">Line 1</label>
                <input type="text" class="form-control" id="line1" name="line1" maxlength="16" placeholder="type first line of text here">
            </div>
            <div class="form-group text-left">
                <label for="line2">Line 2</label>
                <input type="text" class="form-control" id="line2" name="line2" maxlength="16" placeholder="type second line of text here">
            </div>
            <div class="form-group text-left">
                <label for="firstRow">Start Printing on Row #</label>
                <input type="number" class="form-control" id="firstRow" name="firstRow" max="20" min="1" maxlength="2">
            </div>
            <div class="form-group text-left">
                <label for="lastRow">Last Row to Print is Row #</label>
                <input type="number" class="form-control" id="lastRow" name="lastRow" max="20" min="1" maxlength="2">
            </div>
            <button class="btn btn-primary" type="submit" class="btn btn-default">Preview</button>
        </form>
    </div>
</div> <!-- close div.row -->

<?php include "bottom.php"; ?>