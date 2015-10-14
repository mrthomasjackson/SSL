<?php
/**
 * Created by IntelliJ IDEA.
 * User: tjackson
 * Date: 10/13/15
 * Time: 11:33 PM
 */
header("Content-type:application/json");
$dbh = new PDO("mysql:host=localhost;dbname=ssl;port:8889","ssl","ssl");
$query = "SELECT fruitname,fruitcolor FROM  fruits ORDER BY id";
$statement = $dbh->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$encoded = json_encode($result);

echo $encoded;