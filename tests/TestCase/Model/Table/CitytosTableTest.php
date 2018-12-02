<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CitytosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CitytosTable Test Case
 */
class CitytosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CitytosTable
     */
    public $Citytos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.citytos',
        'app.distances'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Citytos') ? [] : ['className' => CitytosTable::class];
        $this->Citytos = TableRegistry::getTableLocator()->get('Citytos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Citytos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
