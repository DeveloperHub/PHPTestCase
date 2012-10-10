<?php
/**
 * PHPTestCase Runner
 *
 * Run it as: php tests/run.php
 *
 * @author RDPanek <rdpanek@developerhub.cz> { DeveloperHub
 * @author wajrou <wajrou@gmail.com>
 */

// PHPUnit Autoloader
require __DIR__ . '/../libs/PHPTestCase/framework/PHPUnit/PHPUnit/PHPUnit/Autoload.php';

// Run PHPUnit
PHPUnit_TextUI_Command::main();
