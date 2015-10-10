<?php
require_once 'src/PHPRtfLite.php';
PHPRtfLite::registerAutoloader();
require_once 'includes/cars_mysqli.php';
if (isset($_POST['download'])) {
    try {
    	$rtf = new PHPRtfLite();
    	$rtf->setMargins(2.54, 2.54, 2.54, 2.54);
    	$rtf->setPaperFormat(PHPRtfLite::PAPER_LETTER);
    	$footer = $rtf->addFooter();
    	$fontFooter = new PHPRtfLite_Font(8, 'Arial', '#000000');
    	$alignFooter = new PHPRtfLite_ParFormat(PHPRtfLite_ParFormat::TEXT_ALIGN_CENTER);
    	$footer->writeText('Used cars for sale - <pagenum>', $fontFooter, $alignFooter);
    } catch (Exception $e) {
    	$error = $e->getMessage();
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Used Cars</title>
<link href="styles/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
<?php
if (isset($error)) {
	echo "<p>$error</p>";
}
?>
    <h1>Used Cars for Sale</h1>
    <?php while ($row = getRow($result)) { ?>
    <h2><?php echo $row['make']; ?></h2>
    <ul>
        <li>Price: $<?php echo number_format($row['price'], 2); ?></li>
        <li>Year: <?php echo $row['yearmade']; ?></li>
        <li>Mileage: <?php echo number_format($row['mileage'], 0); ?></li>
        <li>Transmission: <?php echo $row['transmission']; ?></li>
    </ul>
    <p><?php echo $row['description']; ?></p>
    <hr>
    <?php } ?>
    <form method="post">
        <fieldset>
            <legend>Download Results</legend>
            <p>
                <input type="submit" name="download" id="download" value="Download Rich Text File">
            </p>
        </fieldset>
    </form>
</div>
</body>
</html>