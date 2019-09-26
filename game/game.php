<?php
$dechets = [
        "plastique"=>["img/plastique1.jpg"],
        "verre"=>["img/glass1.jpg"],
        "organique"=>["img/organique1.jpg"]
        ];

$playerBin = $_GET["bin"];
$dechet = $_GET["dechet"];

if ($playerBin == ""){
    echo "Dans quelle poubelle dois-je mettre un dechet de type $dechet ?";
} elseif ($playerBin == "green" && $dechet == "verre") {
    echo "Bravo !";
} elseif ($playerBin == "yellow" && $dechet == "plastique") {
    echo "Bravo !";
} elseif ($playerBin == "blue" && $dechet == "organique") {
    echo "Bravo !";
} else {
    echo "Vous avez perdu !";
}

?>
