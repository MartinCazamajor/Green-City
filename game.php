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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jeu du tri</title>
    <link rel="stylesheet" type="text/css" href="game.css">
</head>
<body>
<div class="container" id="container">
    <div class="waste" id="waste"> <img src="<?php echo $dechets[$dechet][0]; ?>" alt="il devrait y avoir un truc ici"> </div>
    <div class="score" id="score"></div>
    <a class="greenBin" href="?bin=green&amp;dechet=<?php echo $_GET["dechet"]; ?>"></a>
    <a class="blueBin" href="?bin=blue&amp;dechet=<?php echo $_GET["dechet"]; ?>"></a>
    <a class="yellowBin" href="?bin=yellow&amp;dechet=<?php echo $_GET["dechet"]; ?>"></a>
    <a class="reset" href="?bin=&amp;dechet=<?php echo array_rand($dechets,1); ?>">Reset</a>
</div>
</body>
</html>