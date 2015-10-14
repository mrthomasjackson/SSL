<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thomas Jackson
 * Date: 10/13/15
 * Time: 7:28 PM
 */
header("Content-type:text/xml");
$dbh = new PDO("mysql:host=localhost;dbname=ssl;port:8889","ssl","ssl");
$query = "SELECT fruitname,fruitcolor FROM  fruits ORDER BY id";
$statement = $dbh->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$xmlfile = "<?xml version='1.0' encoding='UTF-8'?>";
$xmlfile .= "<fruits>";
foreach($result as $fruit){
    $xmlfile .= "<fruit>";
    $xmlfile .= "<fruitname>".$fruit['fruitname']."</fruitname>";
    $xmlfile .= "<fruitcolor>".$fruit['fruitcolor']."</fruitcolor>";
    $xmlfile .= "</fruit>";
}
$xmlfile .= "</fruits>";

echo $xmlfile;