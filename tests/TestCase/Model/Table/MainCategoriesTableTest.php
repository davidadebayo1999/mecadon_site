<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MainCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MainCategoriesTable Test Case
 */
class MainCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MainCategoriesTable
     */
    public $MainCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.main_categories',
        'app.sub_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MainCategories') ? [] : ['className' => 'App\Model\Table\MainCategoriesTable'];
        $this->MainCategories = TableRegistry::get('MainCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MainCategories);

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
