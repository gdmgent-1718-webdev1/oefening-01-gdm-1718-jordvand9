<?php
$name ='Jordy Van der Haegen';
$string1 = 'hello';
$string2 = 'world';
$x = 7;
$y = 10;
$watIs = 12;
$leeftijd = 19;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1><?= $name ?></h1>
<p><?= $string1 . $string2 ?></p>
<div class="wiskunde">
    <p><?= $y . " + " . $x . " = " .($y+$x); ?></p>
    <p><?= $y . " - " . $x . " = " .($y-$x); ?></p>
    <p><?= $y . " * " . $x . " = " .($y*$x); ?></p>
    <p><?= $y . " / " . $x . " = " .($y/$x); ?></p>
    <p><?= $y . " % " . $x . " = " .($y%$x); ?></p>
</div>
<div class="datatypes">
    <p><?php echo 'De waarde is ' . gettype($watIs) ?></p>
</div>
<div class="conditionalstatement">
<p><?php
if($leeftijd < 16){
    echo $leeftijd . ' is te jong voor deze film.';
}
elseif($leeftijd>16 && $leeftijd<18){
    echo $leeftijd . ' je hebt ouderlijk toezicht nodig.';
}
elseif($leeftijd > 18){
    echo 'Je bent reeds '. $leeftijd .' Geniet van de film';
}
?></p>
</div>
</body>
</html>
