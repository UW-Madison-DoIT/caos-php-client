<?php 

namespace edu\wisc\services\caos;

/**
 * Static factory for instantiating {@link edu\wisc\services\caos\ChubService} instances.
 * 
 * @author Nicholas Blair
 */
class ChubServiceFactory {
	
	/**
	 * Returns a new instance of {@link edu\wisc\services\caos\ChubService}. Encapsulates
	 * the magic in setting up the underlying PHP SoapClient to add WS-Security headers
	 * to outgoing requests.
	 * 
	 * @param string $username ESB service account username
	 * @param string $password ESB service account password
	 * @param string $wsdl
	 * @return a new instance of \edu\wisc\services\caos\ChubService
	 */
	public static function getInstance($username, $password, $wsdl = null) {
		$service = null;
		if(is_null($wsdl)) {
			$service = new ChubService();
		} else {
			$service = new ChubService(array(), $wsdl);
		}
		$namespace = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
		$token = new \stdClass;
		$token->Username = new \SoapVar($username, XSD_STRING, null, null, null, $namespace);
		$token->Password = new \SoapVar($password, XSD_STRING, null, null, null, $namespace);
		$wsec = new \stdClass;
		$wsec->UsernameToken = new \SoapVar($token, SOAP_ENC_OBJECT, null, null, null, $namespace);
		$headers = new \SOAPHeader($namespace, 'Security', $wsec, true);
		$service->__setSOAPHeaders($headers);
		
		return $service;
	}
}