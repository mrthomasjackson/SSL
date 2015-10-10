<?php
$mysql = 'mysql:host=localhost;dbname=phpexport';
$sqlite = 'sqlite:c:/xampp/htdocs/phpexport/sqlite/phpexport.db';
try {
	$db = new PDO($sqlite, 'davidp', 'lynda');
	$sql = 'SELECT * FROM arrangements';
	$result = $db->query($sql);
	$errorInfo = $db->errorInfo();
	if (isset($errorInfo[2])) {
		$error = $errorInfo[2];
	}
} catch (PDOException $e) {
	$error = $e->getMessage();
}
function getRow($result) {
	return $result->fetch();
} 