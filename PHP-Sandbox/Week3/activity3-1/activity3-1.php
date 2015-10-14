<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thomas Jackson
 * Date: 10/13/15
 * Time: 7:28 PM
 */
$contents = simplexml_load_file("http://localhost:8888/activity3-1/fruitxml.php");

//var_dump($contents);

foreach($contents-> fruit as $fruit) {

    echo $fruit->fruitname."</br>";
    echo $fruit->fruitcolor."</br>";
    echo "</br></br>";

}