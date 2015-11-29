<?php
	$stdin = explode(" ", trim(fgets(STDIN)));
	$area = $stdin[0] * $stdin[1];
	$circum = $stdin[0] * 2 + $stdin[1] * 2;
	echo $area . " " . $circum . PHP_EOL;
