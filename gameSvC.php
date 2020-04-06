<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta>
        <title>Steen,Papier,Schaar</title>
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Steen, Papier, Schaar</h1>
        <h2>Speler vs Computer</h2>

<?php
if (isset($_POST["spelerKeuze"])) {
    $_SESSION["spelerKeuze"] = $_POST["spelerKeuze"];
}
if (isset($_POST["reset"])) {
    unset($_SESSION["spelerKeuze"]);
}
$computer = array("Steen","Papier","Schaar");

$index =rand(0, count($computer) - 1 );
$_SESSION["computer"] = $computer[$index];

if (isset($_SESSION["spelerKeuze"])) {
    $speler = $_SESSION["spelerKeuze"];
}

$keuzeComputer = $computer[$index];

if (isset($speler)) {
    ?>
<div class="">
    <?php echo "Speler heeft gekozen voor: $speler"; ?>
</div>
<div class="">
    <?php echo "Computer heeft gekozen voor: $keuzeComputer "; ?>
</div>
    <?php

    if ($speler === $keuzeComputer) {
        echo "Het is gelijk spel";
    }
    
    elseif ($speler === "Steen") {
        if ($keuzeComputer === "Schaar") {
            echo "Speler wint";
        } else {
            echo "computer wint";
        }
    }

    elseif ($speler === "Papier") {
        if ($keuzeComputer === "Steen") {
            echo "Speler wint";
        } else {
            if ($keuzeComputer === "Schaar") {
                echo "computer wint";
            }
        }
    }

    elseif ($speler === "Schaar") {
        if ($keuzeComputer === "Steen") {
            echo "computer wint";
        } else {
            if ($keuzeComputer === "Papier") {
                echo "Speler wint";
            }
        }
    }

    ?>
    <form class="" method="post">
        <input type="submit" name="reset" value="reset knop">
    </form>
    <form class="" action="gameStart.php" method="post">
        <input type="submit" name="terug" value="Terug naar Startscherm">
    </form>
    <?php
}
if (!isset($_SESSION["spelerKeuze"])) {
    ?>
    <form action="gameSVC.php" method="post">
        <h2>Speler</h2>
            <button type="submit" name="spelerKeuze" value="Steen">
                <img src="https://www.twintes.nl/contents/media/l_steen%20meteoriet%20-%20stm0-37_20160719140014.jpg"/>
            </button>
            <button type="submit" name="spelerKeuze" value="Papier">
                <img src="https://www.cchobby.nl/media/catalog/product/cache/10/image/9df78eab33525d08d6e5fb8d27136e95/2/1/218022_1.jpg"/>
            </button>
            <button type="submit" name="spelerKeuze" value="Schaar">
                <img src="https://www.scharenpunt.nl/5596/90.jpg"/>
            </button><br>
    </form>
    <?php
}
?>
    </body>
</html>
