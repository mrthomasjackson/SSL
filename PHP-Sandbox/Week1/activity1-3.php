<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>activity1-1</title>
</head>
<body>
<?php

$colors = array("Red", "Pink", "Blue", "Green", "Yellow", "Purple", "Orange", "Gold", "Rainbow", "White");

$countColors = count($colors);


$i = 0;
while ($i < $countColors) {
    echo "Color " . $i . " is " . $colors[$i] . ".</br>";
    $i ++;
}

echo "</br>";

$x = $countColors - 1;
 while ($x > 0) {
     echo "Color " . $x . " is " . $colors[$x] . ".</br>";
     $x --;
 }

echo "</br>";

$z = 0;
while ($z < $countColors) {
    echo "Color " . $z . " is " . $colors[$z] . ".</br>";
    $z = $z + 2;
}

?>

</body>
</html>
