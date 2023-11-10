<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TemasCartazesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TemasCartazesTable Test Case
 */
class TemasCartazesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TemasCartazesTable
     */
    protected $TemasCartazes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TemasCartazes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TemasCartazes') ? [] : ['className' => TemasCartazesTable::class];
        $this->TemasCartazes = $this->getTableLocator()->get('TemasCartazes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TemasCartazes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TemasCartazesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
