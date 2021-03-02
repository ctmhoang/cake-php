<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use JetBrains\PhpStorm\Pure;

/**
 * Validate component
 */
class ValidateComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    #[Pure] public function validLimit($limit, int $default): int|string
    {
        return is_numeric($limit) ? $limit : $default;
    }
}
