<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DistancesFixture
 *
 */
class DistancesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cityfrom_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cityto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'distance' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_to' => ['type' => 'index', 'columns' => ['cityto_id'], 'length' => []],
            'distance' => ['type' => 'index', 'columns' => ['distance'], 'length' => []],
            'city_id_from' => ['type' => 'index', 'columns' => ['cityfrom_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'distances_ibfk_1' => ['type' => 'foreign', 'columns' => ['cityfrom_id'], 'references' => ['citytos', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'distances_ibfk_2' => ['type' => 'foreign', 'columns' => ['cityto_id'], 'references' => ['citytos', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'cityfrom_id' => 1,
                'cityto_id' => 1,
                'distance' => 1
            ],
        ];
        parent::init();
    }
}
