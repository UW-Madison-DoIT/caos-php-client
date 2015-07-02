<?php 

if (count($argv) !== 3) {
	echo "Error: Did not pass repository or target directory\n";
	exit(1);
}

exec("git --version", $output, $returnval);
if ($returnval !== 0) {
	echo "Error: Could not find git!\n";
	exit(1);
}
unset($output, $returnval);

$blessedRepo = $argv[1];
$dir = $argv[2];

exec("git clone ".$blessedRepo." ".$dir."/caos-php-client", $output, $returnval);
if ($returnval !== 0) {
	echo "Error: Could not clone the blessed repository\n";
	exit(1);
}
unset($output, $returnval);

?>
