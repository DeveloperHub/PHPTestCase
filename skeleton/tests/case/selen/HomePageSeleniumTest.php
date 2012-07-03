<?php
/**
 * HomePageSeleniumTest.php
 *
 * @author rdpanek <rdpanek@gmail.com> { DeveloperHub
 * @date   7/3/12
 */

namespace tests;


/**
 *
 * @group selen
 * @group homePageSeleniumTest
 */
class HomePageSeleniumTest extends \Tests\TestCase
{

	public function setUp()
	{
		parent::setUpSeleniumEnviroment();
	}


	/**
	 *
	 * @group temp
	 */
	public function testFirst()
	{
		$this->driver->load("http://seleniumhq.org/");
		$this->driver->assert_title("Selenium - Web Browser Automation");
	}
}
