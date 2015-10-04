<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>activity1-1</title>
</head>
<body>
<?php

$schoolEmail = $_POST['schoolEmail'];
$personalEmail = $_POST['personalEmail'];

echo "
School Email: $schoolEmail</br>
Personal Email: $personalEmail
</br></br>";

echo "filter_var </br>";

if (filter_var($personalEmail, FILTER_VALIDATE_EMAIL)) {
    echo "Your personal email is valid";
} else {
    echo "Your personal email is not valid";
}

echo "</br>preg_match </br>";
$pattern = '/fullsail.edu/';
if (preg_match($pattern, $schoolEmail)) {
    echo "Your school email validates";
}else {
   echo "Your school email does not validate";
}

?>

</body>
</html>
