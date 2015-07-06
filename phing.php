<?php

$targets = '';
if (count($argv) > 1) {
	for ($i = 1; $i < count($argv); $i++) {
		$targets .= $argv[$i].' ';
	}
} else {
	$targets = 'main ';
}
$command = __DIR__."/vendor/phing/phing/bin/phing ".$targets;

passthru($command);

?>
