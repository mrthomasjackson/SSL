<?php
require_once 'includes/cars_mysqli.php';
if (isset($_POST['download'])) {
	require_once 'src/PHPExcel.php';
	try {
		$sheet = new PHPExcel();
		
		// Set metadata
		$sheet->getProperties()->setCreator('www.example.com')
		                       ->setLastModifiedBy('www.example.com')
		                       ->setTitle('Used cars for sale')
		                       ->setKeywords('cars second-hand used');
		
		// Set default settings
		$sheet->getDefaultStyle()->getAlignment()->setVertical(
	            PHPExcel_Style_Alignment::VERTICAL_TOP);
		$sheet->getDefaultStyle()->getAlignment()->setHorizontal(
				PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$sheet->getDefaultStyle()->getFont()->setName('Lucida Sans Unicode');
		$sheet->getDefaultStyle()->getFont()->setSize(12);
		
		// Get reference to active spreadsheet in workbook
		$sheet->setActiveSheetIndex(0);
		$activeSheet = $sheet->getActiveSheet();
		
		// Set print options
		$activeSheet->getPageSetup()->setOrientation(
	            PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE)
	            ->setFitToWidth(1)
	            ->setFitToHeight(0);
		
		$activeSheet->getHeaderFooter()->setOddHeader('&C&B&16' . 
                $sheet->getProperties()->getTitle())
                ->setOddFooter('&CPage &P of &N');
		
		// Populate with data
		$row = getRow($result);
		$colHeaders = array_keys($row);
		$col = 'A';
		$rownum = 1;
		
		// Set column headings
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
		
		// Populate individual cells with data
		do {
			$col = 'A';
			$rownum++;
			foreach ($row as $value) {
				$activeSheet->setCellValue($col++ . $rownum, $value);
			}
		} while ($row = getRow($result));
		
		// Format individual columns
		$activeSheet->getStyle('B2:B' . $rownum)->getAlignment()
		    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
		$activeSheet->getStyle('G2:G' . $rownum)->getAlignment()
		    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT)
		    ->setWrapText(true);
		$activeSheet->getStyle('D2:D' . $rownum)->getNumberFormat()
		    ->setFormatCode('#,##0');
		$activeSheet->getStyle('F2:F' . $rownum)->getNumberFormat()
		    ->setFormatCode('$#,##0.00');
		
		// Give spreadsheet a title
		$activeSheet->setTitle('Cars');
		
		// Generate Excel file and download
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="cars.xlsx"');
		header('Cache-Control: max-age=0');
		
		$writer = PHPExcel_IOFactory::createWriter($sheet, 'Excel2007');
		$writer->save('php://output');
		exit;
		
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