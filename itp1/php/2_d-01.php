<?php
	$stdin = explode(" ", trim(fgets(STDIN)));
	$rectangle = array(
		$stdin[0],
		$stdin[1]
	);

	$circle_width = array($stdin[2] - $stdin[4], $stdin[2] + $stdin[4]);
	$circle_height = array($stdin[3] - $stdin[4], $stdin[3] + $stdin[4]);

	if (0 <= $circle_width[0] && $circle_width[1] <= $rectangle[0] &&
		0 <= $circle_height[0] && $circle_height[1] <= $rectangle[1]) {
		echo "Yes" . PHP_EOL;
	} else {
		echo "No" . PHP_EOL;
	}
