<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ulid\Ulid;

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
                'id' => Ulid::generate()->getRandomness(),
                'report_id' => 'K0JY0RBVZGXWXW4F',
                'start_time' => Carbon::parse('2020-01-05 09:00'),
                'end_time' => Carbon::parse('2020-01-05 10:00'),
                'detail' => 'メール確認',
                'result' => 'OK',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Ulid::generate()->getRandomness(),
                'report_id' => 'K0JY0RBVZGXWXW4F',
                'start_time' => Carbon::parse('2020-01-05 10:00'),
                'end_time' => Carbon::parse('2020-01-05 12:00'),
                'detail' => '課題１',
                'result' => '終わらなかった',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Ulid::generate()->getRandomness(),
                'report_id' => 'K0JY0RBVZGXWXW4F',
                'start_time' => Carbon::parse('2020-01-05 13:00'),
                'end_time' => Carbon::parse('2020-01-05 16:00'),
                'detail' => '新人研修MT',
                'result' => 'OK',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Ulid::generate()->getRandomness(),
                'report_id' => 'K0JY0RBVZGXWXW4F',
                'start_time' => Carbon::parse('2020-01-05 16:00'),
                'end_time' => Carbon::parse('2020-01-05 17:00'),
                'detail' => '明日の準備',
                'result' => 'OK',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Ulid::generate()->getRandomness(),
                'report_id' => 'K0JY0RBVZGXWXW4G',
                'start_time' => Carbon::parse('2020-01-06 09:00'),
                'end_time' => Carbon::parse('2020-01-06 10:00'),
                'detail' => 'メール確認',
                'result' => 'OK',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Ulid::generate()->getRandomness(),
                'report_id' => 'K0JY0RBVZGXWXW4G',
                'start_time' => Carbon::parse('2020-01-06 10:00'),
                'end_time' => Carbon::parse('2020-01-06 10:30'),
                'detail' => '健康診断',
                'result' => 'OK',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Ulid::generate()->getRandomness(),
                'report_id' => 'K0JY0RBVZGXWXW4G',
                'start_time' => Carbon::parse('2020-01-06 11:00'),
                'end_time' => Carbon::parse('2020-01-06 12:00'),
                'detail' => '面談',
                'result' => 'OK',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'id' => Ulid::generate()->getRandomness(),
                'report_id' => 'K0JY0RBVZGXWXW4G',
                'start_time' => Carbon::parse('2020-01-06 13:00'),
                'end_time' => Carbon::parse('2020-01-06 15:00'),
                'detail' => '課題２',
                'result' => '効率的に取り組めた',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
