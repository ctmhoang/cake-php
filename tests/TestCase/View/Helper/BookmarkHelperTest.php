<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\BookmarkHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\BookmarkHelper Test Case
 */
class BookmarkHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\BookmarkHelper
     */
    protected $Bookmark;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Bookmark = new BookmarkHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Bookmark);

        parent::tearDown();
    }
}
