<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\UserFindBehavior;
use App\Model\Table\BookmarksTable;
use Cake\ORM\Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\UserFindBehavior Test Case
 * @property Table Bookmarks
 * @property  Bookmark
 */
class UserFindBehaviorTest extends TestCase
{
    protected $fixtures = [
        'app.Bookmarks',
        'app.Users',
        'app.Tags',
        'app.BookmarksTags',
    ];
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
        $config = $this->getTableLocator()->exists('Bookmarks') ? [] : ['className' => BookmarksTable::class];
        $this->Bookmarks = $this->getTableLocator()->get('Bookmarks', $config);
    }


    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UserFind);
        unset($this->Bookmarks);

        parent::tearDown();
    }

    public function testFindForUser()
    {
        $count = $this->Bookmarks->find('forUser', ['user_id' => 1])->count();
        self::assertEquals(1, $count);
        $count = $this->Bookmarks->find('forUser', ['user_id' => 0])->count();
        self::assertEquals(0, $count);
    }
}
