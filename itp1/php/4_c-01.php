<?php
	while(true) {
		$stdin = explode(" ", trim(fgets(STDIN)));
		$a = $stdin[0];
		$b = $stdin[2];
		$op = $stdin[1];

		switch($op) {
			case '+' : 
				echo $a + $b . PHP_EOL;
				break;
			case '-' :
				echo $a - $b . PHP_EOL;
				break;
			case '*' :
			   	echo $a * $b . PHP_EOL;
				break;
			case '/' :
			   	echo floor($a / $b) . PHP_EOL;
				break;
			case '?' :
				exit;
			default :
				break;
		}	
	}
