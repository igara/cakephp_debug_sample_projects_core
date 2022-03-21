<?php

declare(strict_types=1);

namespace Core\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserDetailsFixture
 */
class UserDetailsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
