<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            [
                'id' => "K0JY0RBVZGXWXW4F",
                'user_id' => 1,
                'date' => Carbon::parse('2020-01-05'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => "K0JY0RBVZGXWXW4G",
                'user_id' => 1,
                'date' => Carbon::parse('2020-01-06'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => "K0JY0RBVZGXWXW4H",
                'user_id' => 1,
                'date' => Carbon::parse('2020-01-07'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
