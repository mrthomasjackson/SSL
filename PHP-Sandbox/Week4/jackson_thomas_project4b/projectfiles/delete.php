<?php
/**
 * Created by IntelliJ IDEA.
 * User: tjackson
 * Date: 10/23/15
 * Time: 1:23 PM
 */
session_start();
$_SESSION['message'] = "<div class='uk-alert' data-uk-alert>
    <a href='' class='uk-alert-close uk-close'></a>
    <p>You have deleted a contact.</p>
</div>";

$username = "ssl";
$password = "ssl";
$sql = 'mysql:host=localhost;dbname=contacts;port=8889';
$database = new PDO($sql, $username, $password);

$contactid = $_GET['id'];
$statement = $database->prepare("DELETE FROM contacts WHERE id = :id");
$statement->bindParam(':id', $contactid);
$statement->execute();
header('Location: index.php');
die();