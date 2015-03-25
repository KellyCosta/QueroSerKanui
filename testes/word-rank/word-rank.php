<?php
require_once('../util/util.php');

try{

	$data = file_get_contents('data.txt');

	$words = formatStringToArray($data);

	$rank = array_count_values ($words);

	array_multisort(array_values($rank), SORT_DESC, array_keys($rank), SORT_ASC, $rank);

	print_r($rank);

} catch(Exception $e){	
	echo 'Exception: ',  $e->getMessage(), "\n";
}

?>