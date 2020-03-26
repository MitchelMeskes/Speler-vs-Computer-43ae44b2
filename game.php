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
        <h2>Speler vs Speler</h2>

<?php
if (isset($_POST["speler1Keuze"])) {
    $_SESSION["speler1Keuze"] = $_POST["speler1Keuze"];
}
if (isset($_POST["speler2Keuze"])) {
    $_SESSION["speler2Keuze"] = $_POST["speler2Keuze"];
}
if (isset($_POST["reset"])) {
    unset($_SESSION["speler1Keuze"]);
    unset($_SESSION["speler2Keuze"]);
}
?>

<?php
if (isset($_SESSION["speler1Keuze"]) && isset($_SESSION["speler2Keuze"])) {

$speler1 = $_SESSION["speler1Keuze"];
$speler2 = $_SESSION["speler2Keuze"];

?>
<div class="">
<?php echo "Speler 1 heeft gekozen voor: $speler1"; ?>
</div>
<div class="">
<?php echo "Speler 2 heeft gekozen voor: $speler2"; ?>
</div>
<?php

if ($speler1 === $speler2) {
    echo "Het is gelijk spel";
}
else if($speler1 === "Steen"){
    if($speler2 === "Schaar") {
        echo "Speler 1 wint";
    } else {
        echo "Speler 2 wint";
    }
}
else if($speler1 === "Papier") {
    if($speler2 === "Steen") {
        echo "Speler 1 wint";
    } else {
        if($speler2 === "Schaar") {
            echo "speler 2 wint";
        }
    }
}
else if($speler1 === "Schaar") {
    if($speler2 === "Steen") {
        echo "Speler 2 wint";
    } else {
        if($speler2 === "Papier") {
            echo "Speler 1 wint";
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


} elseif (isset($_SESSION["speler1Keuze"]) && !isset($_SESSION["speler2Keuze"])) {
    ?>
<form class="speler1" method="post">
            <h2>Speler 1</h2>
                <h3>Speler 2 maakt zijn keuze</h3>
</form>
<form action="game.php" method="post">
    <h2>Speler 2</h2>
        <button type="submit" name="speler2Keuze" value="Steen">
            <img src="https://www.twintes.nl/contents/media/l_steen%20meteoriet%20-%20stm0-37_20160719140014.jpg"/>
        </button>
        <button type="submit" name="speler2Keuze" value="Papier">
            <img src="https://www.cchobby.nl/media/catalog/product/cache/10/image/9df78eab33525d08d6e5fb8d27136e95/2/1/218022_1.jpg"/>
        </button>
        <button type="submit" name="speler2Keuze" value="Schaar">
            <img src="https://www.scharenpunt.nl/5596/90.jpg"/>
        </button><br>
</form>

    <?php

} if (!isset($_SESSION["speler1Keuze"])) {
    ?>
<form action="game.php" method="post">
    <h2>Speler 1</h2>
        <button type="submit" name="speler1Keuze" value="Steen">
            <img src="https://www.twintes.nl/contents/media/l_steen%20meteoriet%20-%20stm0-37_20160719140014.jpg"/>
        </button>
        <button type="submit" name="speler1Keuze" value="Papier">
            <img src="https://www.cchobby.nl/media/catalog/product/cache/10/image/9df78eab33525d08d6e5fb8d27136e95/2/1/218022_1.jpg"/>
        </button>
        <button type="submit" name="speler1Keuze" value="Schaar">
            <img src="https://www.scharenpunt.nl/5596/90.jpg"/>
        </button><br>
</form>

<h2>Speler 2</h2>
    <h3>Speler 1 maakt zijn keuze</h3>
    <?php
}
?>
    </body>
</html>
