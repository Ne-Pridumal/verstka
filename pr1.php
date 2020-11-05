<?php
require "read.php";

$massive = [];

echo "Кол-во вводов: ";
$num = trim(fgets(STDIN));

for ($i = 1; $i <= $num; $i++){
	$inp = readinput("Ввод $i");
	var_dump($inp);
	$massive[] = $inp;
}
print_r ($massive);