<?php
$sourcefile = 'flowers_wordTemplate.docx';
$xslt = 'flowers_word.xslt';

$zip = new ZipArchive();
$zip->open($sourcefile);
$content = $zip->getFromName('word/document.xml');
if (file_put_contents($xslt, $content)) {
	echo 'Main content extracted<br>';
} else {
	echo 'Problem extracting main content';
}

$zip->close();