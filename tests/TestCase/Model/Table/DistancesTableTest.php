<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DistancesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DistancesTable Test Case
 */
class DistancesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DistancesTable
     */
    public $Distances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.distances',
        'app.cityfroms',
        'app.citytos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Distances') ? [] : ['className' => DistancesTable::class];
        $this->Distances = TableRegistry::getTableLocator()->get('Distances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Distances);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
