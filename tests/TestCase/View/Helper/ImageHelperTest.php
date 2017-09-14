<?php
namespace Intervention\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Intervention\View\Helper\ImageHelper;

/**
 * Intervention\View\Helper\ImageHelper Test Case
 */
class ImageHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Intervention\View\Helper\ImageHelper
     */
    public $Image;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Image = new ImageHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Image);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
