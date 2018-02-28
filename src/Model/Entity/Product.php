<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property int $quantity
 * @property int $sub_category_id
 * @property int $rating
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\SubCategory $sub_category
 * @property \App\Model\Entity\OrderItem[] $order_items
 * @property \App\Model\Entity\Brand[] $brands
 * @property \App\Model\Entity\Color[] $colors
 * @property \App\Model\Entity\Hand[] $hands
 * @property \App\Model\Entity\Image[] $images
 * @property \App\Model\Entity\Length[] $lengths
 * @property \App\Model\Entity\Size[] $sizes
 */
class Product extends Entity
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
        '*' => true,
        'id' => false
    ];
}
