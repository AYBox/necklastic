<?php
$style="body{
            margin-top: 50px;
        }
        hr{
            border: black 1px solid;
        }";
$title="EZ Retailers";

$div3="<div class = \"md-col-3\">";


function printFInfo($name, $phone, $adress, $eznecklastic, $ezlabel){
    echo "<p>
            $name<br>
            $phone<br>
            $adress";
    if($eznecklastic)
        echo "<p>*EZnecklastic*</p>";
    if($ezlabel)
        echo "<p>*EZ Camp Labels*</p>";
    echo "</p>";
}

$retailers=[
    "div3",
    "Lakewood"=>[
        "Accents Clifton"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Accents Westgate"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Buckels"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Center of Town"=>[
            "Necklastic"=>false,
            "Labels"=>true,
            "phone"=>"732-901-9012",
            "address"=>"1700 Madison Ave"
        ],
        "Center of Town South"=>[
            "Necklastic"=>false,
            "Labels"=>true,
            "phone"=>"732-364-7300",
            "address"=>"945 River Ave"
        ],
        "Daily Deals on 2nd"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Evergreen"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Fashion Wholesalers"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Gourmet Glatt"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Heads of Class"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "NPGS Main Street"=>[
            "Necklastic"=>true,
            "Labels"=>true,
            "phone"=>"732-370-1934",
            "address"=>"231 Main Street"
        ],
        "NPGS Jackson"=>[
            "Necklastic"=>true,
            "Labels"=>true
        ],
        "NPGS James Street"=>[
            "Necklastic"=>true,
            "Labels"=>true
        ],
        "Rock Bottom"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Shoppers Paradise"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Westview Shop"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]

    ],
    "/div",
    "div3",
    "Boro Park"=>[
        "ABC"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "ALL IN ONE "=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "BCL"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Buckles"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Ediths 47th St."=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Family Essentials "=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "F&F Family Shop"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Sew Splendid"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "The Trimming Shop "=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Tip Top "=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Treasures Forever"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Weiss Trimming"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "Monsey"=>[
        "Accesories Plus"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Rockland Kosher"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Threads ROC"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "/div",
    "div3",
    "Flatbush"=>[
        "Freunds Family Shop"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "Williamsburg"=>[
        "A to Z luggage"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Creative Elements"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        
        "Englanders Dry Goods"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Family Plaza "=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Lee Photo "=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "OSSO Houswares "=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Sew Splendid"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "South Side Super Market "=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Tip Top "=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Weisners"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "New Square"=>[
        "Fashion Fit"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "H&T Variety"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "/div",
    "div3",
    "Monroe"=>[
        "H&T Variety"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Rosenbergs"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
        "Shell Station"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "Far Rockaway"=>[
        "Cozy Hose"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "Passaic"=>[
        "Hosiery Planet"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "Chicago"=>[
        "Magneta Boutique"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "London"=>[
        "Complete Comfort"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "London"=>[
        "Dainty Wear "=>[
            "Necklastic"=>false,
            "Labels"=>true
        ],
         "Tznius Center Tosh"=>[
            "Necklastic"=>false,
            "Labels"=>true
        ]
    ],
    "/div"
];

include "top.php";
?>

<h1>Retailers</h1>
<p>(list formation in progress)</p>
<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">All Retailers</a></li>
    <li><a data-toggle="pill" href="#menu1">EZ Necklastic</a></li>
    <li><a data-toggle="pill" href="#menu2">EZ Camp Labels</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="row">
        <?php foreach($retailers as $city=>$retailer):
            if($retailer==="div3") echo "<div class = \"col-md-3\">";
            elseif($retailer==="/div") echo "</div>";
            else{
        ?>
            <h2><?= $city ?></h2>
                <?php foreach($retailer as $name=>$info): ?>
                    <p><?= $name ?></p>
                <?php endforeach;
           }
        endforeach ?>
    </div>
</div>
<div id="menu1" class="tab-pane fade">
    <div class="row">
        <?php foreach($retailers as $city=>$retailer):
            if($retailer==="div3") echo "<div class = \"col-md-3\">";
            elseif($retailer==="/div") echo "</div>";
            else{
        ?>

                <h2><?= $city ?></h2>
                    <?php foreach($retailer as $name=>$info): 
                        if($info['Necklastic']){
                    ?>
                        <p><?= $name ?></p>
                    <?php 
                        }
                    endforeach;
           }
        endforeach ?>
    </div>
</div>
<div id="menu2" class="tab-pane fade">
    <div class="row">
        <?php foreach($retailers as $city=>$retailer):
            if($retailer==="div3") echo "<div class = \"col-md-3\">";
            elseif($retailer==="/div") echo "</div>";
            else{
        ?>
            <h2><?= $city ?></h2>
                <?php foreach($retailer as $name=>$info): ?>
                    <p><?= $name ?></p>
                <?php endforeach;
           };
        endforeach ?>
    </div>
</div>
</div>

    <?php include "bottom.php"; ?>