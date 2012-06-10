<?php

/*
 * Spoustec PHPTestCase
 *
 * php tests/run.php
 * @author RDPanek <rdpanek@developerhub.cz> { DeveloperHub
 */

// cesta k PHPUnit Frameworku
$dir = "./libs/PHPTestCase/framework/PHPUnit/";

// pridani trid PHPUnit do include path
$paths = scandir( $dir );
$includes = array();
foreach($paths as $path)
{
    if ( !preg_match('/^\./', $path) )
		{
        $includes[] = $dir . $path . '/';
    }
}
set_include_path(implode(PATH_SEPARATOR,$includes).PATH_SEPARATOR.get_include_path());

// zavolani autoloader
require $dir . 'PHPUnit/PHPUnit/Autoload.php';

// spusteni
PHPUnit_TextUI_Command::main();
