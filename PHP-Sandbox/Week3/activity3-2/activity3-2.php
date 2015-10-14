<?php
/**
 * Created by IntelliJ IDEA.
 * User: tjackson
 * Date: 10/13/15
 * Time: 11:35 PM
 */
$content = file_get_contents("fruits.json");


$encoded = json_decode($content);

foreach($encoded as $fruit){
    echo "</br></br>";
    echo $fruit->fruitname."</br>";
    echo $fruit->fruitcolor."</br>";

}