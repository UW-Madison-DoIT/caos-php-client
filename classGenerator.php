<?php 

if ($argc !== 2) {
	echo "Error: Invalid number of arguments.";
	exit(1);
}

$caosVersion = $argv[1];

require_once(__DIR__."/vendor/autoload.php");

if (file_exists(__DIR__.'/src/main')) {
	$files = glob(__DIR__.'/src/main/*'); // get all file names
	foreach($files as $file){ // iterate files
		if(is_file($file))
			unlink($file); // delete file
	}
	rmdir(__DIR__.'/src/main');
}

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
	new \Wsdl2PhpGenerator\Config(array(
			'inputFile' => 'http://esb.services.wisc.edu/esbv2/CHUB/WebService/chub-ws-'.$caosVersion.'/chub.wsdl',
			'outputDir' => 'src/main/'
	))	
);


?>