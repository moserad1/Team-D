<?php

$files = glob(dirname(__FILE__) . "/*.[pP][dD][fF]");

if (count($files) == 1) {
	$url = 'http://'.$_SERVER['HTTP_HOST'];
	$filename = basename($files[0]);
	header("Location: " . $url . "/" . $filename);
} else {
	print("Achtung, keine oder mehr als eine PDF Datei :-(");
	print_r($files);
	print(count($files));
}

?>