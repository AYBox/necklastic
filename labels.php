<?php
$style="body{
            margin-top: 80px;
        }
        /*img{
            width: 65%;
            float:left;
        }*/";
$title="Wholesale";

include "top.php";
?>
<div class="row">
    <img class="col-md-4 col-xs-12" src="images/EZlabelPackageFront.png" alt="EZ label Package Front image">
    <button class="btn btn-default"><a href="retailers.php">Find an EZ Camp Label Retailer</a></button>
</div>    
<h2>Coming soon! Printable EZ Camp Labels</h2>
<form action="labelsPreview.php" method="post" class="well form-inline text-center">
    <h3 class="text-center">Enter text to print on labels</h3>
    <div class="form-group text-left">
        <label for="line1">Line 1</label>
        <input type="text" class="form-control" id="line1" name="line1" maxlength="16" placeholder="type first line of text here">
    </div>
    <div class="form-group text-left">
        <label for="line2">Line 2</label>
        <input type="text" class="form-control" id="line2" name="line2" maxlength="16" placeholder="type second line of text here">
    </div>
    <button type="submit" class="btn btn-default">Preview</button>
</form>

<?php include "bottom.php"; ?>