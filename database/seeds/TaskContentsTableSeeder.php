<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_contents')->insert([
            [
                'task_id'=>"task_id_by_hash_1",
                'detail' => "メールを確認する",
                'result' => "完了"
            ],
            [
                'task_id'=>"task_id_by_hash_2",
                'detail' => "AAA-BBB 実装",
                'result' => "だいぶ手こずった。早めに質問するべきだった。"
            ],
            [
                'task_id'=>"task_id_by_hash_3",
                'detail' => "資料作成",
                'result' => ""
            ],
        ]);
    }
}
