<?php
	$result = [];
	$i = 0;

	while(true) {
		$stdin = explode(" ", trim(fgets(STDIN)));
		if ($stdin[0] == 0 && $stdin[1] == 0) {
			break;
		}

		$result[$i] = $stdin;
		$i++;
	}

	foreach($result as $value) {
		drawRectangle($value[0], $value[1]);
	}

	function drawRectangle($height, $width) {
		for($i=0; $i<$height; $i++) {
			for($j=0; $j<$width; $j++) {
				echo "#";
			}
			echo PHP_EOL;
		}
		echo PHP_EOL;
	}

