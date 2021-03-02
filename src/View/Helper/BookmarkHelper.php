<?php
declare(strict_types=1);

namespace App\View\Helper;

use App\Model\Entity\Bookmark;
use Cake\View\Helper;
use Cake\View\Helper\HtmlHelper;
use Cake\View\View;


/**
 * @property \App\View\Helper\HtmlHelper Html
 */
class BookmarkHelper extends Helper
{
    public $helpers = ['Html'];
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * @param Bookmark $bookmark
     * @return string
     */

    public function url(Bookmark $bookmark): string
    {
        return $this->Html->link($bookmark->url, $bookmark->url, ['title' => $bookmark->title]);
    }

}
