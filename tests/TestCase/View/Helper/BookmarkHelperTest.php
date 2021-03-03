<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\Model\Entity\Bookmark;
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

    public function testUrl(){
        $data= ['title' => 'TITLE', 'url'=>'https://test.com'];
        $bookmark = new Bookmark($data);
        $output = $this->Bookmark->url($bookmark);
        $excepted = '<a href="https://test.com" title="TITLE">https://test.com</a>';
        self::assertEquals($excepted,$output);

    }
}
