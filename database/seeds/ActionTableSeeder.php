<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ActionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions')->insert([
            [
                'report_id'=>"K0JY0RBVZGXWXW4F",
                'detail'=>'時間を測って作業する',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'report_id'=>"K0JY0RBVZGXWXW4G",
                'detail'=>'決めた時間で分からなければ質問する',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'report_id'=>"K0JY0RBVZGXWXW4H",
                'detail'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);

    }
}
