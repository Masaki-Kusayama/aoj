<?php
	$result = array();

	while(true) {
		$stdin = explode(" ", trim(fgets(STDIN)));
	
		if ($stdin[0] == 0 && $stdin[1] == 0) {
			break;
		}

		sort($stdin);
		$result[] = $stdin[0] . " " . $stdin[1];
	}

	foreach ($result as $val) {
		echo $val . PHP_EOL;
	}
