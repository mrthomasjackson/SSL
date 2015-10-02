<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>activity1-1</title>
</head>
<body>
<?php

$name = "Thomas Jackson";
$age = 22;

$personIndex = array ($name, $age);
$person = array ("name" => $name, "age" => $age);

echo "My name is " . $name . " and age is " . $age . "." ;
echo "<br>";
echo 'My name is ' . $name . ' and age is ' . $age . '.' ;
echo "<br>";
echo 'My name is ' . $personIndex[0] . ' and age is ' . $personIndex[1] . '.' ;
echo "<br>";
echo 'My name is ' . $person["name"] . ' and age is ' . $person["age"] . '.' ;
echo "<br>";
$age = null;
echo "$age";
unset($name);
echo $name;




?>

</body>
</html>
