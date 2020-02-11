<?php

namespace Tests\Feature\infrastructure\query;

use App\infrastructure\eloquent\Report;
use App\infrastructure\query\ReportQueryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReportQueryServiceTest extends TestCase
{
    use RefreshDatabase;

    /** @var ReportQueryService */
    private $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed('UsersTableSeeder');
        $this->seed('ReportsTableSeeder');

        $this->sut = new ReportQueryService(new Report());
    }

    /**
     * 対象ユーザーのレポートが存在する場合、すべてのレポート（一覧表示用クラス）を返却すること
     */
    public function test_get_3reports()
    {
        $result = $this->sut->findByUserId(1);
        $this->assertTrue(count($result) === 3);
    }

    /**
     * 対象ユーザーのレポートが存在しない場合、空の配列を返却すること
     */
    public function test_not_get_report()
    {
        $result = $this->sut->findByUserId(2);
        $this->assertTrue(empty($result));
    }
}
