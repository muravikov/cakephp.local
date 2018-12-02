<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cityfroms Model
 *
 * @property \App\Model\Table\DistancesTable|\Cake\ORM\Association\HasMany $Distances
 *
 * @method \App\Model\Entity\Cityfrom get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cityfrom newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cityfrom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cityfrom|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cityfrom|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cityfrom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cityfrom[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cityfrom findOrCreate($search, callable $callback = null, $options = [])
 */
class CityfromsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('cityfroms');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Distances', [
            'foreignKey' => 'cityfrom_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('ru_name')
            ->maxLength('ru_name', 255)
            ->requirePresence('ru_name', 'create')
            ->notEmpty('ru_name');

        $validator
            ->scalar('ru_region')
            ->maxLength('ru_region', 255)
            ->requirePresence('ru_region', 'create')
            ->notEmpty('ru_region');

        return $validator;
    }
}
