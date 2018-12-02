<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CityfromsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CityfromsTable Test Case
 */
class CityfromsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CityfromsTable
     */
    public $Cityfroms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cityfroms',
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
        $config = TableRegistry::getTableLocator()->exists('Cityfroms') ? [] : ['className' => CityfromsTable::class];
        $this->Cityfroms = TableRegistry::getTableLocator()->get('Cityfroms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cityfroms);

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
