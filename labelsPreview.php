<?php
    $line1="";
    $line2="";
    $firstRow=1;
    $lastRow=20;

    if(!empty($_GET['line1']))
        $line1 = $_GET['line1'];
    if(!empty($_GET['line2']))
        $line2 = $_GET['line2'];
    if(!empty($_GET['firstRow']))
        $firstRow = $_GET['firstRow'];
    if(!empty($_GET['lastRow']))
        $lastRow = $_GET['lastRow'];

    $style="*{
            box-sizing: border-box;
            font-weight: bold;
        }
        body{
                margin: .38in .41in;
        }
        @media screen{
            body{
                margin-top: 80px;
            }
            td{
                border: 1px solid black;
            }           
        }
        table{
            border-collapse: collapse;
            table-layout: fixed;
            width: 7.68in;
            height: 10.2in;
        }
        td{
            width: 1.18in;
            height: .51in;
            text-align: center;
            font-size: 12px;
        }
        td div{
            width: 1.18in;
            height: .51in;
            overflow: hidden;
            padding: 10px 0;
        }
        .gutter{
            width: .12in;
        }
        @page{
            margin: 0;
        }
        #buttonDiv{
             margin: 0 0 30px 30px;
        }
        #buttonDiv button{
            margin-right: 30px;
        }
        @media print{
            #buttonDiv{
                display: none;
            }
        }";
    $title="Preview";

    include "top.php";
?>
    </div><!--close .container div for printing purpose-->

    <div id="buttonDiv">
        <button><a href="labels.php">Reset</a></button>
        <button onclick="window.print()">Print</button>
    </div>
    <table>
        <tbody>
            <?php
                for($i=1; $i < $firstRow; $i++){
                    echo "<tr>";
                    for($j=0; $j<5; $j++){
                        echo "<td><div></div></td><td class=gutter></td>";
                    }
                    echo "<td><div></div></td>";
                    echo "</tr>";
                }
                for($i=$firstRow; $i<=$lastRow; $i++){
                    echo "<tr>";
                    for($j=0; $j<5; $j++){
                        echo "<td><div>$line1<br>$line2</div></td><td class=gutter></td>";
                    }
                    echo "<td><div>$line1<br>$line2</div></td>";
                    echo "</tr>";
                }
                for($i=$lastRow; $i<20; $i++){
                    echo "<tr>";
                    for($j=0; $j<5; $j++){
                        echo "<td><div></div></td><td class=gutter></td>";
                    }
                    echo "<td><div></div></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <div><!--opening div to replace .container opening div which was closed earlier-->
 
<?php include "bottom.php" ?>