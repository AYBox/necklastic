<?php
$style="body{
            margin-top: 80px;
        }";
$title="Wholesale";

include "top.php";
?>

    <button class="btn btn-default"><a href="retailers.php">Find an EZ Camp Label Retailer</a></button>
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