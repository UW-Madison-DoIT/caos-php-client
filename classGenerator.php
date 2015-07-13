<?php 

if ($argc !== 2) {
	echo "Error: Invalid number of arguments.";
	exit(1);
}

$caosVersion = $argv[1];

require_once(__DIR__."/vendor/autoload.php");

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
	new \Wsdl2PhpGenerator\Config(array(
			'inputFile' => 'http://esb.services.wisc.edu/esbv2/CHUB/WebService/chub-ws-'.$caosVersion.'/chub.wsdl',
			'outputDir' => 'src/main/'
	))	
);


?>