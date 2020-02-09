<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'report_id'=>"K0JY0RBVZGXWXW4F",
                'type'=>10,
                'detail'=>'自力で解決することができきた。',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'report_id'=>"K0JY0RBVZGXWXW4G",
                'type'=>10,
                'detail'=>'質問して解決できた。',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'report_id'=>"K0JY0RBVZGXWXW4H",
                'type'=>10,
                'detail'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'report_id'=>"K0JY0RBVZGXWXW4F",
                'type'=>20,
                'detail'=>'時間を意識していなかった',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'report_id'=>"K0JY0RBVZGXWXW4G",
                'type'=>20,
                'detail'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'report_id'=>"K0JY0RBVZGXWXW4H",
                'type'=>20,
                'detail'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
