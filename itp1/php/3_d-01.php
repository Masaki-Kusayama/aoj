<?php
	$stdin = explode(" ", trim(fgets(STDIN)));
	$count = 0;
	for($i = $stdin[0]; $i <= $stdin[1]; $i++) {
		if ($stdin[2] % $i == 0) {
			$count++;
		}
	}
	echo $count . PHP_EOL;
