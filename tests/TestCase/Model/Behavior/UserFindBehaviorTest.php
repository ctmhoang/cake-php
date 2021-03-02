<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\UserFindBehavior;
use Cake\ORM\Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\UserFindBehavior Test Case
 */
class UserFindBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Behavior\UserFindBehavior
     */
    protected $UserFind;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $table = new Table();
        $this->UserFind = new UserFindBehavior($table);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UserFind);

        parent::tearDown();
    }
}
