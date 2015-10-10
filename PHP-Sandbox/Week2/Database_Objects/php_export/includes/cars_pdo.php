<?php
$mysql = 'mysql:host=localhost;dbname=phpexport';
$sqlite = 'sqlite:/Users/tjackson/Documents/GIT/Full\ Sail/SSL/PHP-Sandbox/Week2/Database_Objects/php_export/phpexport.db';

try {
	//$db = new PDO($mysql, 'exporter', 'lynda');
	$db = new PDO($sqlite, "exporter", "exporter");
	$sql = 'SELECT car_id, make, yearmade, mileage, transmission,
    price, description FROM cars
    INNER JOIN makes USING (make_id)
    WHERE yearmade > 2008
    ORDER BY price';
	$result = $db->query($sql);
	$errorInfo = $db->errorInfo();
	if (isset($errorInfo[2])){
		$error = $errorInfo[2];
	}
} catch (PDOException $e) {
	$error = $e->getMessage();
}
