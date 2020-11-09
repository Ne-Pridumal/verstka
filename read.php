<?php

function readinput(string $quest){
	echo $quest.": ";
	$input = trim(fgets(STDIN));
	switch ($input){
		case "true":
			return true;
		case "false":
			return false;
    }
    if (is_numeric($input)){
    	return +$input;
	}
	if ($input === "!stop"){
		return null;
	}
	if (is_string($input)){
		return $input;
	}
}
