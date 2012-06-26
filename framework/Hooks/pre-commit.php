<?php

include("./libs/PHPTestCase/framework/Hooks/HookTest.php");

/**
 * Pred metodou run, muzete nastavit dalsi parametry pro PHPUnit
 * <code>
 * $hk->setOptions("--group unit"); // pro spusteni testu v dane skupine
 * $hk->setPath("php"); // cestu k php
 * </code>
 */
$hk = new PHPTestCase\Framework\HookTest;
$hk->setOptions("--group unit");
$hk->run();
