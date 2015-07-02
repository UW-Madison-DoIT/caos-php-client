<?php 

$targetDir = '';
$version = '';
$branch = '';
if (count($argv) === 3) {
	$targetDir = $argv[1];
	$version = $argv[2];
	$branch = "master";
} else if (count($argv) === 4) {
	$targetDir = $argv[1];
	$version = $argv[2];
	$branch = $argv[3];
} else {
	echo "Error: Improper number of arguments passed to prepare.php";
	exit(1);
}

$home = __DIR__;

exec("git --version", $output, $returnval);
if ($returnval !== 0) {
	echo "Error: Could not find git!\n";
	exit(1);
}
unset($output, $returnval);

if (!chdir($targetDir."/caos-php-client")) {
	echo "Unable to change directories";
	exit(1);
}

exec("git checkout ".$branch, $output, $returnval);
if ($returnval !== 0) {
	echo "Error: Could not checkout to master branch\n";
	exit(1);
}
unset($output, $returnval);

exec("git tag ".$version, $output, $returnval);
if ($returnval !== 0) {
	echo "Error: Could not tag release\n";
	exit(1);
}
unset($output, $returnval);

exec("git push origin ".$branch." --tags --force", $output, $returnval);
if ($returnval !== 0) {
	echo "Error: Could not push branch\n";
	exit(1);
}
unset($output, $returnval);

if (!chdir($home)) {
	echo "Unable to change directories";
	exit(1);
}

?>
