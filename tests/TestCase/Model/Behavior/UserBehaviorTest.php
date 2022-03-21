<?php
declare(strict_types=1);

namespace Core\Test\TestCase\Model\Behavior;

use Cake\ORM\Table;
use Cake\TestSuite\TestCase;
use Core\Model\Behavior\UserBehavior;

/**
 * Core\Model\Behavior\UserBehavior Test Case
 */
class UserBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Core\Model\Behavior\UserBehavior
     */
    protected $User;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $table = new Table();
        $this->User = new UserBehavior($table);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->User);

        parent::tearDown();
    }
}
