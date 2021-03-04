<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\ValidateComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\ValidateComponent Test Case
 */
class ValidateComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\ValidateComponent
     */
    protected $Validate;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Validate = new ValidateComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Validate);

        parent::tearDown();
    }

    public function testValidLimit()
    {
        $output = $this->Validate->validLimit(1, 0);
        self::assertEquals(1, $output);
        $output = $this->Validate->validLimit('u', 0);
        self::assertEquals(0, $output);
    }

}
