<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thomas Jackson
 * Date: 10/13/15
 * Time: 11:33 PM
 */
$username="root";
$password="root";
$database = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $username, $password);
$id=$_GET['id'];
$stmt=$database->prepare("DELETE FROM fruits WHERE id IN (:id)");
$stmt->bindParam( ':id', $id);
$stmt->execute();
header('Location: ads.php'); //redirect us back to the fruits page
die();