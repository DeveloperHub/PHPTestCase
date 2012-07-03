<?php

/*
 *
 * @author RDPanek <rdpanek@developerhub.cz> { DeveloperHub
 */

namespace Tests;

require_once './tests/libs/nette.min.php';

class TestCase extends \PHPUnit_Framework_TestCase  
{
	/** @var \WebDriver_Driver|null */
	public $driver = NULL;

	public function setUp()
	{
		$loader = new \Nette\Loaders\RobotLoader;

		$loader->addDirectory('tests');
		$loader->addDirectory('libs/PHPTestCase');

		$loader->setCacheStorage(new \Nette\Caching\Storages\FileStorage('temp'));
		$loader->register();
	}


	public function setUpSeleniumEnviroment()
	{
		self::setUp();

		$this->driver = \WebDriver_Driver::InitAtLocal("4444", "firefox");
	}



	public function tearDown() {
		if ($this->driver) {
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
