<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hands Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Products
 *
 * @method \App\Model\Entity\Hand get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hand newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hand[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hand|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hand patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hand[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hand findOrCreate($search, callable $callback = null, $options = [])
 */
class HandsTable extends Table
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

        $this->table('hands');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsToMany('Products', [
            'foreignKey' => 'hand_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'products_hands'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
