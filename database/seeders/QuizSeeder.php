<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'name' => 'Closed quiz',
            'status' => 'closed',
        ]);

        DB::table('quizzes')->insert([
            'name' => 'Open quiz',
            'status' => 'open',
        ]);

        DB::table('quizzes')->insert([
            'name' => 'Pending quiz',
            'status' => 'pending',
        ]);
    }
}
