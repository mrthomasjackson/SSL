<?php

$file = 'filetest1.txt';
if($handle = fopen($file, 'w')) { // overwrite

	$content = "One\nTwo\nThree\nFour\nFive\n";
	fwrite($handle, $content);
	
	fclose($handle);
} else {
	echo "Could not open file.";
}
