<?php

declare(strict_types=1);

namespace Core\Model\Behavior;

use Cake\ORM\Behavior;
use Core\Model\Table\UsersTable;
use Core\Model\Entity\User;

/**
 * User behavior
 */
class UserBehavior extends Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * @return \Cake\Collection\CollectionInterface&iterable<User>
     */
    public static function all(): \Cake\Collection\CollectionInterface
    {
        $usersTable = new UsersTable();
        $users = $usersTable->find()->all();
        return $users;
    }
}
