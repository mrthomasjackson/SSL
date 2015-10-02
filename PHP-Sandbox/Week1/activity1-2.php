<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>activity1-1</title>
</head>
<body>
<?php

function calcGrade($grade)
{
    echo "</br>";
    echo "Your grade is " . $grade . "</br>";
    if ($grade >= 90) {
        echo "You have earned an A";
    } elseif ($grade < 90 and $grade >= 80) {
        echo "You have earned a B";
    } elseif ($grade < 80 and $grade >= 70) {
        echo "You have earned a C";
    } elseif ($grade < 70 and $grade >= 60) {
        echo "You have earned a D";
    } else {
    echo "You have earned a F";
}
    echo "</br>";
};

calcGrade(94);
calcGrade(54);
calcGrade(89.9);
calcGrade(60.01);
calcGrade(102.1);

?>

</body>
</html>
