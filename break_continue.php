<?php 


for ($i = 1; $i <= 100; $i++) {
	if ($i % 2 == 0) {
		echo $i . PHP_EOL;
	} else {
		continue;
	}
};
echo PHP_EOL;

for ($i = 1; $i <= 100; $i++) {
	if ($i <= 10) {
		echo $i . PHP_EOL;
	} else {
		break;
	}
}