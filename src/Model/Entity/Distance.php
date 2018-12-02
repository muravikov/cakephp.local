<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Distance Entity
 *
 * @property int $id
 * @property int $cityfrom_id
 * @property int $cityto_id
 * @property int $distance
 *
 * @property \App\Model\Entity\Cityfrom $cityfrom
 * @property \App\Model\Entity\Cityto $cityto
 */
class Distance extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cityfrom_id' => true,
        'cityto_id' => true,
        'distance' => true,
        'cityfrom' => true,
        'cityto' => true
    ];
}
