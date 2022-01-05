<?php 

function php_io_read_json($json_file){
	$file_content = file_get_contents($json_file);
	$json = json_decode($file_content);

	return $json;
}

function php_io_write_json($data,$json_file){
	$json = json_encode($data);
	file_put_contents($json_file);
}
