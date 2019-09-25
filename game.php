<?php
$dechets = ["plastique","verre","organique"];

$opponentChoice = "Où faut-il mettre un déchet de type : " . $dechets[rand(0, 2)] . " ?" ."<br>";

echo "Dans une poubelle verte, bleu ou jaune ?"."<b>";

$playerChoice = readline ("");

if (in_array($playerChoice, $dechets)){

    if ($playerChoice == "verte" && $opponentChoice == "verre") {
        echo "Bravo !";
    } elseif ($playerChoice == "jaune" && $opponentChoice == "plastique") {
        echo "Bravo !";
    } elseif ($playerChoice == "bleu" && $opponentChoice == "organique") {
        echo "Bravo !";
    } else {
        echo "vous avez perdu";
    }
}


