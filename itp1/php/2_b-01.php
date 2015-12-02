<?php
	$stdin = explode(" ", trim(fgets(STDIN)));
	if ($stdin[0] < $stdin[1] && $stdin[1] < $stdin[2]) {
		echo "Yes" . PHP_EOL;
	} else {
		echo "No" . PHP_EOL;
	}
