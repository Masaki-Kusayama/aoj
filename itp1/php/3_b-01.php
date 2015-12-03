<?php
	$result = array();
	while(true) {
		$stdin = trim(fgets(STDIN));
		if ($stdin == 0) break;

		$result[] = $stdin;
	}

	foreach($result as $key => $value) {
		echo "Case " . ++$key . ": " . $value . PHP_EOL;
	}
