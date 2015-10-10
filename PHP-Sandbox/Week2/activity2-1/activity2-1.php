<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thomas Jackson
 * Class: SSL
 * Term: October 2015
 */

$data = file_get_contents('http://www.omdbapi.com/?t=goodfellas');

$parsed_data = json_decode($data);

var_dump($parsed_data);

echo "</br></br>";

$file = 'dictionary.txt';
if($handle = fopen($file, 'w')) { // overwrite

    $content = "One\nTwo\nThree\nFour\nFive\n";
    fwrite($handle, $content);

    fclose($handle);
} else {
    echo "Could not open file.";
}

$my_handle = fopen("dictionary.txt", "r");
while (!feof($my_handle) ) {
    $text = fgets($my_handle);
    $piece = explode("\n", $text);
    print $piece[0]. "</br>";
}
fclose($my_handle);
