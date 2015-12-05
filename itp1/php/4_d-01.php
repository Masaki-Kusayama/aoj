<?php
	$count = trim(fgets(STDIN));
	$numbers = explode(" ", trim(fgets(STDIN)));
	
	$min = min($numbers);
	$max = max($numbers);
	$sum = array_sum($numbers);

	echo $min . " " . $max . " " . $sum . PHP_EOL;
