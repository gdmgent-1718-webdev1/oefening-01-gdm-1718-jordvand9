<?php
$name ='Jordy Van der Haegen';
$string1 = 'hello';
$string2 = 'world';
$x = 7;
$y = 10;
$watIs = true;
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
elseif($leeftijd>=16 && $leeftijd<=18){
    echo $leeftijd . ' je hebt ouderlijk toezicht nodig.';
}
elseif($leeftijd > 18){
    echo 'Je bent reeds '. $leeftijd .' Geniet van de film';
}
?></p>
</div>
<div class="fibonacci">
<?php
$count = 0 ;
$f1 = 0;
$f2 = 1;
echo $f1." , ";
echo $f2." , ";
while ($count < 20 )
{
$f3 = $f2 + $f1 ;
echo $f3." , ";
$f1 = $f2 ;
$f2 = $f3 ;
$count = $count + 1;
}
?>
</div>
</body>
</html>
