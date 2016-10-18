#!/usr/local/bin/php
<?php
	include('JSON.php');
	$json = new Services_JSON();

	echo '<code>resources_md5.json</code> has been reset, ';
	echo '<button onClick="window.close()">Close this window</button>';
	echo '<hr />';

	$input_file = 'resources.json';
	$output_file = 'resources_md5.json';
	$string = file_get_contents($input_file);
	$json_a = $json->decode($string);
	$result = array();
	foreach($json_a as $item) {
		$result[] = array(
			'title' => $item->title,
			'md5' => md5($item->title),
		);
	}
	array_pop($result);
	echo '<code>';
	var_dump($result);
	echo '</code>';
	$json_b = $json->encode($result);
    $fp = fopen($output_file, 'w+');
    fwrite($fp, $json->prettyPrint($json_b));
    fclose($fp);
?>