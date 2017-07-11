<?php
    $line1 = $_POST['line1'];
    $line2 = $_POST['line2'];

    $style="*{
            box-sizing: border-box;
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

    <div id="buttonDiv">
        <button><a href="labels.php">Reset</a></button>
        <button onclick="window.print()">Print</button>
    </div>
    <table>
        <tbody>
            <?php
                for($i=0; $i<20; $i++){
                    echo "<tr>";
                    for($j=0; $j<5; $j++){
                        echo "<td><div>$line1<br>$line2</div></td><td class=gutter></td>";
                    }
                    echo "<td><div>$line1<br>$line2</div></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
 
<?php include "bottom.php" ?>