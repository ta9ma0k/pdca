<?php

namespace Tests\Feature\infrastructure\query;

use App\infrastructure\eloquent\Report;
use App\infrastructure\query\ReportListQueryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ReportListQueryServiceTest extends TestCase
{
    use RefreshDatabase;

    /** @var ReportListQueryService */
    private $sut;

    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate:refresh');
        $this->seed('UsersTableSeeder');
        $this->seed('ReportsTableSeeder');

        $this->sut = new ReportListQueryService(new Report());
    }

    /**
     * @test
     * 対象ユーザーのレポートが存在する場合、すべてのレポート（一覧表示用クラス）を返却すること
     */
    public function get_3reports()
    {
        $result = $this->sut->findByUserId(1);
        $this->assertTrue(count($result) === 3);
    }

    /**
     * @test
     * 対象ユーザーのレポートが存在しない場合、空の配列を返却すること
     */
    public function not_get_report()
    {
        $result = $this->sut->findByUserId(2);
        $this->assertTrue(empty($result));
    }
}
