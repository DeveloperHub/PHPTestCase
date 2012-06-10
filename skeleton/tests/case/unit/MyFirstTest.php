<?php
/**
 * MyFirstTest
 *
 * @Date: 16-05-2012
 * @author Radim Daniel Panek <rdpanek@gmail.com>
 */

namespace Tests;

/**
 * @group unit
 */
class MyFirstTest extends \Tests\TestCase
{

	public function setUp()
	{
		parent::setUp();
	}

	/**
	 *
	 * @covers \Trida::testovanaMetoda
	 * @author JmenoAutora
	 * @group unit
	 */
	public function testFirst()
	{
		$this->assertTrue( TRUE );
	}
}
