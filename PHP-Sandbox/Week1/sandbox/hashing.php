<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>

<?php
/*
* Generate a secure hash for a given password. The cost is passed
* to the blowfish algorithm. Check the PHP manual page for crypt to
* find more information about this setting.
*/
function generate_hash($password, $cost=11){

    $salt=substr(base64_encode(openssl_random_pseudo_bytes(17)),0,22);

    $salt=str_replace("+",".",$salt);

    $param='$'.implode('$',array(
            "2y",
            str_pad($cost,2,"0",STR_PAD_LEFT),
            $salt
        ));
    return crypt($password,$param);
}

function validate_pw($password, $hash){

    return crypt($password, $hash)==$hash;
}

echo generate_hash("password", 12);

?>


</body>
</html>