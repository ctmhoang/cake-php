<?php
/**
 * @var AppView $this
 * @var Bookmark[]|CollectionInterface $bookmarks
 */

use App\Model\Entity\Bookmark;
use App\View\AppView;
use Cake\Collection\CollectionInterface;

foreach ($bookmarks as $bookmark) {
    debug($bookmark);
}
