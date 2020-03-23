<!DOCTYPE html>
<html>
    <head>
        <meta>
        <title>Steen,Papier,Schaar</title>
    </head>
    <body>
<h1>Steen, Papier, Schaar</h1>

<form class="" action="game.php" method="get">
    <h2>Speeler 1</h2>
    <select class="" name="keuze1">
        <option value="">- Keuze -</option>
        <option value="Steen">Steen</option>
        <option value="Papier">Papier</option>
        <option value="Schaar">Schaar</option>
    </select>
    <input type="submit" name="submit1" value="Submit">
</form>
<?php
    if (isset($_GET["keuze1"])) {
        echo (htmlspecialchars($_GET["keuze1"]));
    }
?>
<form class="" action="game.php" method="get">
    <h2>Speeler 2</h2>
    <select class="" name="keuze2">
        <option value="">- Keuze -</option>
        <option value="Steen">Steen</option>
        <option value="Papier">Papier</option>
        <option value="Schaar">Schaar</option>
    </select>
    <input type="submit" name="submit2" value="Submit">
</form>
<?php
    if (isset($_GET["keuze2"])) {
        echo (htmlspecialchars($_GET["keuze2"]));
    }
?>
    </body>
</html>
