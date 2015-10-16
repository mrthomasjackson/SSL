<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thomas Jackson
 * Date: 10/13/15
 * Time: 11:33 PM
 */
header("Content-type:application/json");
$username="ssl";
$password="ssl";
$database = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $username, $password);

$query = "c";
$statement = $database->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$encoded = json_encode($result);

echo $encoded;