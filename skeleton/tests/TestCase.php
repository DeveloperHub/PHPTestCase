<?php

/*
 *
 * @author RDPanek <rdpanek@developerhub.cz> { DeveloperHub
 */

namespace Tests;

require_once './tests/libs/nette.min.php';

class TestCase extends \PHPUnit_Framework_TestCase  
{
	public function setUp()
	{
		$loader = new \Nette\Loaders\RobotLoader;
		$loader->addDirectory('tests');
		$loader->addDirectory('libs/SocialBakers');
		$loader->addDirectory('app');
		$loader->setCacheStorage(new \Nette\Caching\Storages\FileStorage('temp'));
		$loader->register();
	}

}
