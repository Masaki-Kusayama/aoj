<?php
	$stdin = explode(" ", trim(fgets(STDIN)));
	sort($stdin, SORT_NUMERIC);
	echo $stdin[0] . " " . $stdin[1] . " " . $stdin[2] . PHP_EOL;
