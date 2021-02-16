<?php

$bestellwert = $_POST['bestellwert'];

var_dump(floatval($bestellwert));  //Float(50) ist gesehen wird!
$rabatt = 0;

if($bestellwert > 100) {
    $rabatt = $bestellwert * 0.1;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Diagramme</title>
</head>

<body>
    <form action="" method="post">

        <label for="bestellwert">Bestellwert</label>
        <br>
        <input type="number" name="bestellwert">

        <input type="submit" value="berechne rabatt">


    </form>

    <hr>

    <div class = "ausgabe">
        <p>Du erhälst mit deiner heutigen Bestellung einen Rabatt von <?php echo $rabatt;?> Euro </p>
    
    </div>


</body>


</html>