<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MainCategories Model
 *
 * @property \Cake\ORM\Association\HasMany $SubCategories
 *
 * @method \App\Model\Entity\MainCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\MainCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MainCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MainCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MainCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MainCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MainCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MainCategoriesTable extends Table
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

        $this->table('main_categories');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('SubCategories', [
            'foreignKey' => 'main_category_id'
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
            ->requirePresence('categoryname', 'create')
            ->notEmpty('categoryname');

        $validator
            ->requirePresence('category_logo', 'create')
            ->notEmpty('category_logo');

        return $validator;
    }
}
