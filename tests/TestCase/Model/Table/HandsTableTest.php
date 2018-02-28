<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HandsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HandsTable Test Case
 */
class HandsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HandsTable
     */
    public $Hands;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hands',
        'app.products',
        'app.sub_categories',
        'app.main_categories',
        'app.order_items',
        'app.orders',
        'app.users',
        'app.brands',
        'app.products_brands',
        'app.colors',
        'app.products_colors',
        'app.products_hands',
        'app.images',
        'app.products_images',
        'app.lengths',
        'app.products_lengths',
        'app.sizes',
        'app.products_sizes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hands') ? [] : ['className' => 'App\Model\Table\HandsTable'];
        $this->Hands = TableRegistry::get('Hands', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hands);

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
