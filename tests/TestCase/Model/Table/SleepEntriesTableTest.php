<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SleepEntriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SleepEntriesTable Test Case
 */
class SleepEntriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SleepEntriesTable
     */
    protected $SleepEntries;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.SleepEntries',
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
        $config = $this->getTableLocator()->exists('SleepEntries') ? [] : ['className' => SleepEntriesTable::class];
        $this->SleepEntries = $this->getTableLocator()->get('SleepEntries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SleepEntries);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SleepEntriesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SleepEntriesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
