<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'id' => "task_id_by_hash_1",
                'report_id' => "K0JY0RBVZGXWXW4F",
                'start_time' => Carbon::parse('2020-01-05 9:00:00'),
                'end_time' => Carbon::parse('2020-01-05 10:30:00'),
            ],
            [
                'id' => "task_id_by_hash_2",
                'report_id' => "K0JY0RBVZGXWXW4F",
                'start_time' => Carbon::parse('2020-01-05 10:30:00'),
                'end_time' => Carbon::parse('2020-01-05 12:00:00'),
            ],
            [
                'id' => "task_id_by_hash_3",
                'report_id' => "K0JY0RBVZGXWXW4F",
                'start_time' => Carbon::parse('2020-01-05 13:00:00'),
                'end_time' => Carbon::parse('2020-01-05 14:00:00'),
            ],
        ]);
    }
}
