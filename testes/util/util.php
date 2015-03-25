<?php 

function formatStringToArray($data){
	
	if(empty($data)){
		throw new Exception('This file is empty');
	}

	$data = strtolower( preg_replace("/[^a-zA-Z ]/i", ' ', $data) );

	$words = preg_split('/[\s\r\n\t[:punct:]]+/', $data, -1, PREG_SPLIT_NO_EMPTY);

	return $words;
}

?>