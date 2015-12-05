<?php
	$stdin = trim(fgets(STDIN));
	$area = sprintf("%.5f", $stdin * $stdin * M_PI);
	$circum = sprintf("%.5f", $stdin * 2 * M_PI);
	echo $area . " " . $circum . PHP_EOL;
