<?php

function readinput(string $quest){
	echo $quest.": ";
	$input = trim(fgets(STDIN));
	if($input == "true"){
		$input = true;
	}
	elseif($input == "false"){
		$input = false;
	}
	elseif (is_numeric($input)){
		$input = +$input;
	}
	return $input;
}