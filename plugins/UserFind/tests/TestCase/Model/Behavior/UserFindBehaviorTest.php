<?php
declare(strict_types=1);

namespace UserFind\Test\TestCase\Model\Behavior;

use Cake\ORM\Table;
use Cake\TestSuite\TestCase;
use UserFind\Model\Behavior\UserFindBehavior;

/**
 * UserFind\Model\Behavior\UserFindBehavior Test Case
 */
class UserFindBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \UserFind\Model\Behavior\UserFindBehavior
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
