<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PromocoesFixture
 */
class PromocoesFixture extends TestFixture
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
                'loja' => '',
                'CodPromocao' => 1,
                'CODIGOINT' => '',
                'descricaomidia' => 'Lorem ipsum dolor sit amet',
                'VlrVenda' => 1,
                'VlrVendaNormal' => 1,
                'precoclube' => 1,
                'limite' => 1,
                'local' => '',
                'proddesconto' => '',
                'qtdgatilho' => 1,
                'PrFinalDesconto' => 1,
                'finalidade' => '',
                'tppromocao' => 1,
                'descricao' => 'Lorem ipsum dolor sit amet',
                'codproddesconto' => '',
            ],
        ];
        parent::init();
    }
}
