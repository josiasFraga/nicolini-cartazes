<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApoUsuariolojaFixture
 */
class ApoUsuariolojaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'apo_usuarioloja';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Login' => '50809aa3-627d-45d2-b506-c909990de25e',
                'Loja' => 'a73e64fc-f6bc-43fa-8393-3709adfa48ba',
                'Manutencao' => 1,
                'Gerencial' => 1,
                'ultatu' => 1688593164,
                'LjDefault' => 1,
            ],
        ];
        parent::init();
    }
}
