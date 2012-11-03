<?php
/**
 * Bootstrap for PHPUnit
 *
 * @author wajrou <wajrou@gmail.com>
 */

require_once __DIR__ . '/libs/nette.min.php';

$loader = new \Nette\Loaders\RobotLoader;

$loader->addDirectory('tests');
$loader->addDirectory('libs/PHPTestCase');

$loader->setCacheStorage(new \Nette\Caching\Storages\FileStorage('temp'));
$loader->register();
