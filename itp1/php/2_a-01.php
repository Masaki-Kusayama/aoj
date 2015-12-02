<?php
	$stdin = explode(" ", trim(fgets(STDIN)));
	$a = $stdin[0];
	$b = $stdin[1];

	if ($a > $b) {
		echo "a > b" . PHP_EOL;
	} else if ($a < $b) {
		echo "a < b" . PHP_EOL;
	} else {
		echo "a == b" . PHP_EOL;
	}
