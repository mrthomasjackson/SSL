<?php
require_once 'includes/cars_mysqli.php';
if (isset($_POST['download'])) {
	require_once 'src/PHPExcel.php';
	try {
		$sheet = new PHPExcel();
		$sheet->getProperties()->setCreator('www.example.com')
		                       ->setLastModifiedBy('www.example.com')
		                       ->setTitle('Used cars for sale')
		                       ->setKeywords('cars second-hand used');
		$sheet->getDefaultStyle()->getAlignment()->setVertical(
	            PHPExcel_Style_Alignment::VERTICAL_TOP);
		$sheet->getDefaultStyle()->getAlignment()->setHorizontal(
				PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$sheet->getDefaultStyle()->getFont()->setName('Lucida Sans Unicode');
		$sheet->getDefaultStyle()->getFont()->setSize(12);
		
		$sheet->setActiveSheetIndex(0);
		$activeSheet = $sheet->getActiveSheet();
		
		$activeSheet->getPageSetup()->setOrientation(
	            PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE)
	            ->setFitToWidth(1)
	            ->setFitToHeight(0);
		
		$activeSheet->getHeaderFooter()->setOddHeader('&C&B&16' . 
                $sheet->getProperties()->getTitle())
                ->setOddFooter('&CPage &P of &N');
		
		$row = getRow($result);
		$colHeaders = array_keys($row);
		$col = 'A';
		$rownum = 1;
		
		foreach ($colHeaders as $header) {
			$activeSheet->setCellValue($col . $rownum, $header);
			$activeSheet->getStyle($col . $rownum)->getFont()->setBold(true);
			if ($col == 'G') {
				$activeSheet->getColumnDimension($col)->setWidth(60);
			} else {
				$activeSheet->getColumnDimension($col)->setAutoSize(true);
			}
			$col++;
		}
		
		do {
			$col = 'A';
			$rownum++;
			foreach ($row as $value) {
				$activeSheet->setCellValue($col++ . $rownum, $value);
			}
		} while ($row = getRow($result));
		
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
                <input type="submit" name="download" id="download" value="Download Excel Spreadsheet">
            </p>
        </fieldset>
    </form>
</div>
</body>
</html>