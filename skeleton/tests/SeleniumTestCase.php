<?php
/**
 * Base TestCase for Selenium tests
 *
 * @author RDPanek <rdpanek@developerhub.cz> { DeveloperHub
 * @author wajrou <wajrou@gmail.com>
 */

namespace Tests;

class SeleniumTestCase extends \PHPUnit_Framework_TestCase  
{
	/** @var \WebDriver_Driver|null */
	public $driver = NULL;

	public function setUp()
	{
		self::setUp();

		$this->driver = \WebDriver_Driver::InitAtLocal("4444", "firefox");
	}



	public function tearDown()
	{
		if (!is_null($this->driver)) {
			if ($this->hasFailed()) {
				$this->driver->set_sauce_context("passed", false);
			} else {
				$this->driver->set_sauce_context("passed", true);
			}
			$this->driver->quit();
		}
		parent::tearDown();
	}
}
