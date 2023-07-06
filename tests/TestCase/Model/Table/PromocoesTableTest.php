<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PromocoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PromocoesTable Test Case
 */
class PromocoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PromocoesTable
     */
    protected $Promocoes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Promocoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Promocoes') ? [] : ['className' => PromocoesTable::class];
        $this->Promocoes = $this->getTableLocator()->get('Promocoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Promocoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PromocoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
