<?php
require 'game.php';
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Jeu du tri</title>
        <link rel="stylesheet" type="text/css" href="game.css">
        <link rel="stylesheet" href="../style.css">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    </head>
    <body>

        <!--        HEADER      -->
        <header>
            <div class="menu">
                <a href="../index.html"><span class="title"><img src="../img/Logo GC.png"></span></a>
                <input class="burger" type="checkbox">
                <nav>
                    <a href="../index.html#home">Accueil</a>
                    <a href="../index.html#actions">Actions</a>
                    <a href="../index.html#associations">Associations</i></a>
                    <a href="../index.html#gestion">Gestion des dechets</a>
                    <a href="../index.html#contact">Contact</a>
                </nav>

                <div class="inline_menu">
                    <a class="hover_style" href="../index.html#home">Accueil</a>
                    <a class="hover_style" href="../index.html#actions">Actions</a>
                    <a class="hover_style" href="../index.html#associations">Associations</i></a>
                    <a class="hover_style" href="../index.html#gestion">Gestion des dechets</a>
                    <a class="hover_style" href="../index.html#contact">Contact</a>
                </div>
            </div>
        </header>

        <article class="container">

            <div class="waste">
                <p><?php echo game($playerBin, $dechet) ?></p>
                <img src="<?php echo "../img/".$dechets[$dechet][$_GET["rand"]]; ?>" alt="il devrait y avoir un truc ici">
            </div>

            <div class="bins">
                <a class="green bin" href="?bin=green&amp;dechet=<?php echo $_GET["dechet"]; ?>&amp;rand=<?php echo $_GET["rand"] ?>"></a>
                <a class="blue bin" href="?bin=blue&amp;dechet=<?php echo $_GET["dechet"]; ?>&amp;rand=<?php echo $_GET["rand"] ?>"></a>
                <a class="yellow bin" href="?bin=yellow&amp;dechet=<?php echo $_GET["dechet"]; ?>&amp;rand=<?php echo $_GET["rand"] ?>"></a>
            </div>

            <div class="reset">
                <a class="press" href="?bin=&amp;dechet=<?php echo array_rand($dechets,1); ?>&amp;rand=<?php echo rand(0,2) ?>">Rejouer ?</a>
            </div>
        </article>
    </body>
</html>