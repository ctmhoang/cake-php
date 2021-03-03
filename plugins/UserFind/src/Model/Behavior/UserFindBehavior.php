<?php
declare(strict_types=1);

namespace UserFind\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Query;
use Cake\ORM\Table;

/**
 * UserFind behavior
 */
class UserFindBehavior extends Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function findForUser(Query $query, array $args): Query
    {
        return $query->where(['user_id' => $args['user_id']]);
    }
}
