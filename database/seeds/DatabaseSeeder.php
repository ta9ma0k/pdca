<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(GoalsTableSeeder::class);
        $this->call(ActionTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(TaskContentsTableSeeder::class);
    }
}
