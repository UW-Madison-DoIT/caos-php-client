<?php 

$url = 'https://packagist.org/api/update-package?username=cknuth&apiToken=HGE8mDwioQXdL_xH5nuV';
$options = array(
	'http' => array(
		'header' => "content-type:application/json",
		'method' => 'POST',
		'content' => '{"repository":{"url":"https://packagist.org/packages/uwmadison_doit/caos-php-client"}}'
	)
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

var_dump($result);

?>
