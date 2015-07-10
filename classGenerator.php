<?php 

require_once(__DIR__."/vendor/autoload.php");

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
	new \Wsdl2PhpGenerator\Config(array(
			'inputFile' => 'http://esb.services.wisc.edu/esbv2/CHUB/WebService/chub-ws-1.5/chub.wsdl',
			'outputDir' => 'src/main/'
	))	
);


?>