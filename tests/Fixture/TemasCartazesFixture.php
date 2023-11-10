<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TemasCartazesFixture
 */
class TemasCartazesFixture extends TestFixture
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
                'inicio' => '2023-11-09 19:59:07',
                'fim' => '2023-11-09 19:59:07',
                'nome' => 'Lorem ipsum dolor sit amet',
                'diretorio' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
