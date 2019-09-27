<?php
$dechets = [
        "plastique"=>[
            "plastique1.jpg",
            "sac.jpg",
            "food.jpg",
            ],
        "verre"=>[
            "glass1.jpg",
            "bocal.jpg",
            "beer.jpg",
            ],
        "organique"=>[
            "organique1.jpg",
            "dupont.jpg",
            "restes.jpg",
            ],
        ];

$playerBin = $_GET["bin"];
$dechet = $_GET["dechet"];

function game($playerBin, $dechet){
    if ($playerBin == "") {
        return"Dans quelle poubelle dois-je mettre ce déchet ?";
    } elseif ($dechet == "verre" && $playerBin != "green") {
        return "Perdu ! Le verre va dans la poubelle verte, attention a bien le trier avant et à retirer les parties non-recyclables (couvercles, bouchons...)";
    } elseif ($dechet == "plastique" && $playerBin != "yellow") {
        return "Perdu ! Les déchets plastiques vont dans la poubelle jaune, attention à ne pas mettre les emballages trop souillés de déchets organiques.";
    } elseif ($dechet == "organique" && $playerBin != "blue") {
        return"Perdu ! Les déchets organiques vont dans la poubelle bleue, la plupart des restes alimentaires peuvent aussi être utilisé entant que compost bien pratique pour le potager !";
    } else {
        return "Gagné, notre planète te remercie !";
    }
}

