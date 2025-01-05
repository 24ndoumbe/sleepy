<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeeklySummariesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeeklySummariesTable Test Case
 */
class WeeklySummariesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WeeklySummariesTable
     */
    protected $WeeklySummaries;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.WeeklySummaries',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('WeeklySummaries') ? [] : ['className' => WeeklySummariesTable::class];
        $this->WeeklySummaries = $this->getTableLocator()->get('WeeklySummaries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->WeeklySummaries);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WeeklySummariesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\WeeklySummariesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
