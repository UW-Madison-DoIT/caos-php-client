<?php

use edu\wisc\services\caos\ChubService;

/**
 * Integration tests for {@link ChubService}
 * 
 * @author Nicholas Blair
 */
class ChubServiceIntegrationTest extends PHPUnit_Framework_TestCase
{
	
	const TEST_CONFIGURATION_FILE = 'it-configuration.ini';
	
	/** @var array  integration test configuration parsed by {@link parse_ini_file} */
	protected static $testConfiguration;
	
	/**
	 * Parses the integration test data and creates an instance of {@link WiscList_Config}
	 * @throws \RuntimeException  if unable to parse test data
	 */
	public static function setUpBeforeClass()
	{
		$iniFile = __DIR__ . '/' . static::TEST_CONFIGURATION_FILE;
		static::$testConfiguration = parse_ini_file($iniFile, INI_SCANNER_RAW);
		if (static::$testConfiguration === false) {
			throw new \RuntimeException("Unable to parse $iniFile");
		}
	}
	
	/**
	 * Returns the value of the specified configuration option
	 *
	 * @param string $key  property key 
	 * @return string  property value 
	 * @throws \RuntimeException  if the key cannot be found
	 */
	public static function getConfigurationValue($key)
	{
		if (!isset(static::$testConfiguration[$key])) {
			throw new \RuntimeException("Integration test property not found with key: $key");
		}
		return strval(static::$testConfiguration[$key]);
	}
	
	/**
	 * Call getPresentTerm, confirm successful response.
	 */
	public function testGetPresentTerm() {
		$service = new edu\wisc\services\caos\ChubService(
				array('login'          => static::getConfigurationValue('caos.username'),
                      'password'       => static::getConfigurationValue('caos.password'))
				);
		$request = new edu\wisc\services\caos\GetPresentTermRequest(null);
		$response = $service->GetPresentTerm($request);
		var_dump($response);
		$this->assertTrue(false);
	}
}