<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ulid\Ulid;

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
                'goal' => 'タスクを3つ消化する',
                'good_point' => '適切な質問ができた',
                'bad_point' => '集中力が切れてしまったときがあった',
                'next_action' => '時間で区切ることを意識する',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => "K0JY0RBVZGXWXW4G",
                'user_id' => 1,
                'date' => Carbon::parse('2020-01-06'),
                'goal' => 'タスクを3つ消化する',
                'good_point' => '適切な質問ができた',
                'bad_point' => '1つのことの時間がかかってしまった',
                'next_action' => '取り組む時間を事前に決めておく',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => "K0JY0RBVZGXWXW4H",
                'user_id' => 1,
                'date' => Carbon::parse('2020-01-07'),
                'goal' => 'タスクを3つ消化する',
                'good_point' => '予定通り動くことができた',
                'bad_point' => '無理やり終わらせてしまった部分もあった',
                'next_action' => 'スピード感を意識することは悪くないと思う。精度を上げていくのは自分の実力だと思うので成果物をしっかり見直す。',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
