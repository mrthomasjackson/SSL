<?php
require_once 'src/Foundationphp/Psr4Autoloader.php';

$loader = new Foundationphp\Psr4Autoloader();
$loader->register();
$loader->addNamespace('Foundationphp', 'src/Foundationphp');

use Foundationphp\Exporter\Xml;
use Foundationphp\Exporter\OpenDoc;

require_once 'includes/flowers_pdo.php';
if (isset($_POST['download'])) {
    try {
        
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Flower Arrangements</title>
<link href="styles/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
<?php

if (isset($error)) {
    echo "<p>$error</p>";
} else {
    ?>
<h1>Flower Arrangements</h1>
<?php 
while ($row = getRow($result)) { ?>
<h2><?php echo $row['title']; ?></h2>
    <figure>
        <img src="images/<?php echo $row['image']; ?>"
            alt="<?php echo $row['alt']; ?>">
    </figure>
    <p class="price">$<?php echo $row['price']; ?></p>
<?php echo $row['description']; ?>
<hr>
<?php } ?>
<form method="post">
    <fieldset>
        <legend>Download Results</legend>
        <p>
            <input type="submit" name="download" id="download" value="Download OpenDocument Text (.odt) File">
        </p>
    </fieldset>
</form>
<?php } ?>
</div>
</body>
</html>