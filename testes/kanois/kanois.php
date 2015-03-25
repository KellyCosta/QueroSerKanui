<?php

$numbers = range(1, 100);

function multiploDe5($a){
	$result = $a%5;

	if ($result != 0){
		return false;
	}

	return true;
}

function multiploDe7($a){
	$result = $a%7;

	if ($result != 0){
		return false;
	}

	return true;
}

function multiplo($a){
	if( multiploDe5($a) && multiploDe7($a) ){
		$a = 'KaNois';
	} elseif (multiploDe5($a)) {
		$a = 'Ka';
	} elseif (multiploDe7($a)) {
		$a = 'Nois';
	}

	return $a;
}

foreach ($numbers as $key => $value) {
	$result[$value] = multiplo($value);			
}

print_r($result);

?>