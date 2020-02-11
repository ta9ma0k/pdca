<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goals')->insert([
            [
                'report_id'=>"K0JY0RBVZGXWXW4F",
                'detail'=>'３つタスクを消化する。',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'report_id'=>"K0JY0RBVZGXWXW4G",
                'detail'=>'2つタスクを消化する。',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'report_id'=>"K0JY0RBVZGXWXW4H",
                'detail'=>'プレゼン資料を作成する。',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
