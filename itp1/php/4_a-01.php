<?php
	$stdin = explode(" ", trim(fgets(STDIN)));
	$d = floor($stdin[0] / $stdin[1]);
	$r = $stdin[0] % $stdin[1];
	$f = sprintf("%f", $stdin[0] / $stdin[1]);
	echo $d . " " . $r . " " . $f . PHP_EOL;
