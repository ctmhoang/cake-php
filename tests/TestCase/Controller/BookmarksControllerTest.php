<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\BookmarksController;
use App\Model\Table\BookmarksTable;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\BookmarksController Test Case
 *
 * @uses \App\Controller\BookmarksController
 */
class BookmarksControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Bookmarks',
        'app.Users',
        'app.Tags',
        'app.BookmarksTags',
    ];
    private \App\Controller\Component\BookmarksComponent|\BookmarksComponent|\Bookmarks|\Cake\ORM\Table|\Cake\Controller\Component\BookmarksComponent|\DebugKit\Controller\Component\BookmarksComponent $Bookmarks;

    public function setUp(): void
    {
        parent::setUp();
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
        unset($this->Bookmarks);

        parent::tearDown();
    }

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd(): void
    {
        $bookmark = ['title' => 'foo', 'url' => 'http://foobar.com', 'user_id' => 1];
        $this->post('/bookmarks/add', $bookmark);
        $this->assertRedirect('/bookmarks');
        $count = $this->Bookmarks->find()->where($bookmark)->count();
        self::assertEquals(1, $count);
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
