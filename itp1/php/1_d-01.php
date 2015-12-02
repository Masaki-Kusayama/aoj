<?php
	$stdin = trim(fgets(STDIN));
	$h = floor($stdin / (60 * 60));
	$m = floor($stdin % (60 * 60) / 60);
	$s = $stdin % (60 * 60) % 60;
	echo $h . ":" . $m . ":" . $s . PHP_EOL;
