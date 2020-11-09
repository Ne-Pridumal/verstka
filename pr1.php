<?php
require "read.php";

/*
 * 1 @test "false" == false
 * 2 @test "true" == true
 * 3 @test "51" = 51
 * 4 @test "1.2" = 1.2
 * 5 @test "слово" == слово
 * 6 @test "!stop" == null
 */

function readTest($number_tests){
	echo " 1 test - bool(false)\n 2 test - bool(true) \n 3 test - integer test (51) \n 4 test - float test (1.2) \n 5 test - string test (word)\n 6 test - null test (!stop) \n\n";
	for ($i = 1; $i <= $number_tests; $i++)
	{
		$test_number = readinput("Enter test number");
		switch ($test_number)
		{
			case 1:
				$result = readinput("Iput");
				echo "'false' == ".$result.($result === false ? " - passed" : " - error").PHP_EOL.PHP_EOL;
				break;
			case 2:
				$result = readinput("Iput");
				echo "'true' == ".$result.($result === true ? " - passed" : " - error").PHP_EOL.PHP_EOL;
				break;
			case 3:
				$result = readinput("Iput");
				echo "'51' == ".$result.(is_numeric($result) ? " - passed" : " - error").PHP_EOL.PHP_EOL;
				break;
			case 4:
				$result = readinput("Input");
				echo "'1.2' == ".$result.(is_double($result) ? " - passed" : " - error").PHP_EOL.PHP_EOL;
				break;
			case 5:
				$result = readinput("Iput");
				echo "'word' == ".$result.(is_string($result) ? " - passed" : " - error").PHP_EOL.PHP_EOL;
				break;
			case 6:
				$result = readinput("Iput");
				echo "'!stop' ==".$result.($result === null ? " - passed" : " - error").PHP_EOL.PHP_EOL;
				break;
		}
	}
}

readTest(readinput("Number of tests"));