<?php

declare(strict_types=1);

namespace Core\Test\TestCase\Model\Table;

use Core\Model\Table\UserDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * Core\Model\Table\UserDetailsTable Test Case
 */
class UserDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Core\Model\Table\UserDetailsTable
     */
    protected $UserDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UserDetails',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserDetails') ? [] : ['className' => UserDetailsTable::class];
        $this->UserDetails = $this->getTableLocator()->get('UserDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UserDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \Core\Model\Table\UserDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \Core\Model\Table\UserDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
