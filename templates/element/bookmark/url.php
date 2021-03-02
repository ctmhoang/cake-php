<?php

use App\Model\Entity\Bookmark;

/** @var Bookmark $bookmark */
?>
<a href='<?= h($bookmark->url) ?>'><?= h($bookmark->url) ?></a>
