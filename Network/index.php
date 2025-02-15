<?php 
	$src_filename = __DIR__ . "/files/201 RAW.txt";
	//echo file_exists($filename);
	$handle = fopen($src_filename, 'r');
	$content = file($src_filename);
	echo '<pre>';
	print_r($content);
	echo '</pre>';
	fclose($handle);
	$dst_filename = __DIR__ . '/files/201 ready.txt';
	$dst_file = fopen($dst_filename, 'w');

	$lines = array_values($content);
	for($i = 0; $i < count($lines); $i++) {
		// split any amount of space '\s+'
		$IPandMACs = preg_split('/\s+/', $lines[$i]);
		$string_to_write = $IPandMACs[1] . "        " . $IPandMACs[0];
		fwrite($dst_file, $string_to_write . PHP_EOL);
		
	}
	fclose($dst_file);
	$dst_file = fopen($dst_filename, 'r');
	$content = file($dst_filename);
	echo '<pre>';
	print_r($content);
	echo '</pre>';

	fclose($dst_file);

	////////////////////////////////////////////////////////////////////

	$wal_filename = __DIR__ . '/files/201 ready.txt';
	$handle = fopen($wal_filename, 'r');
	$lines = array_values($content);

	echo '<table border="1">';
	echo '<tr>';
		echo '<th>';
		echo 'MAC address';
		echo '</th>';
		echo '<th>';
		echo 'IP address';
		echo '</th>';
	echo '</tr>';

	for($i = 0; $i < count($lines); $i++) {
		$IPandMACs = preg_split('/\s+/', $lines[$i]);

		echo '<tr>';
		echo '<td>';
			echo $IPandMACs[1];
		echo '</td>';
		echo '<td>';
			echo $IPandMACs[0];
		echo '</td>';
		echo '</tr>';
	}

	echo '</table>';
	fclose($handle);
?>