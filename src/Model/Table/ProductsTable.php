<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SubCategories
 * @property \Cake\ORM\Association\HasMany $OrderItems
 * @property \Cake\ORM\Association\BelongsToMany $Brands
 * @property \Cake\ORM\Association\BelongsToMany $Colors
 * @property \Cake\ORM\Association\BelongsToMany $Hands
 * @property \Cake\ORM\Association\BelongsToMany $Images
 * @property \Cake\ORM\Association\BelongsToMany $Lengths
 * @property \Cake\ORM\Association\BelongsToMany $Sizes
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->table('products');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SubCategories', [
            'foreignKey' => 'sub_category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('OrderItems', [
            'foreignKey' => 'product_id'
        ]);
        $this->belongsToMany('Brands', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'brand_id',
            'joinTable' => 'products_brands'
        ]);
        $this->belongsToMany('Colors', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'color_id',
            'joinTable' => 'products_colors'
        ]);
        $this->belongsToMany('Hands', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'hand_id',
            'joinTable' => 'products_hands'
        ]);
        $this->belongsToMany('Images', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'image_id',
            'joinTable' => 'products_images'
        ]);
        $this->belongsToMany('Lengths', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'length_id',
            'joinTable' => 'products_lengths'
        ]);
        $this->belongsToMany('Sizes', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'size_id',
            'joinTable' => 'products_sizes'
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

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->integer('rating')
            ->allowEmpty('rating');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['sub_category_id'], 'SubCategories'));

        return $rules;
    }
}
