<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cityfrom Entity
 *
 * @property int $id
 * @property string $name
 * @property string $ru_name
 * @property string $ru_region
 *
 * @property \App\Model\Entity\Distance[] $distances
 */
class Cityfrom extends Entity
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
        'name' => true,
        'ru_name' => true,
        'ru_region' => true,
        'distances' => true
    ];
}
