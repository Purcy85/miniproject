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
    	DB::table('quizzes')->delete();

        $closed_quiz_id = DB::table('quizzes')->insertGetID([
            'name' => 'Closed quiz',
            'status' => 'closed',
        ]);


        $open_quiz_id = DB::table('quizzes')->insertGetID([
            'name' => 'Open quiz',
            'status' => 'open',
        ]);

        $question_id = DB::table('questions')->insertGetID([
            'quiz_id' => $open_quiz_id,
            'title' => 'Which is larger?',
        ]);

        DB::table('options')->insert([
            'question_id' => $question_id,
            'dice' => '[4]',
            'correct' => 0,
        ]);
        DB::table('options')->insert([
            'question_id' => $question_id,
            'dice' => '[3]',
            'correct' => 0,
        ]);
        DB::table('options')->insert([
            'question_id' => $question_id,
            'dice' => '[1]',
            'correct' => 1,
        ]);

        $question_id = DB::table('questions')->insertGetID([
            'quiz_id' => $open_quiz_id,
            'title' => 'Which is larger?',
        ]);

        DB::table('options')->insert([
            'question_id' => $question_id,
            'dice' => '[5]',
            'correct' => 0,
        ]);
        DB::table('options')->insert([
            'question_id' => $question_id,
            'dice' => '[3]',
            'correct' => 0,
        ]);
        DB::table('options')->insert([
            'question_id' => $question_id,
            'dice' => '[2]',
            'correct' => 0,
        ]);
        DB::table('options')->insert([
            'question_id' => $question_id,
            'dice' => '[6]',
            'correct' => 1,
        ]);

        $question_id = DB::table('questions')->insertGetID([
            'quiz_id' => $open_quiz_id,
            'title' => 'Which is larger?',
        ]);

        DB::table('options')->insert([
            'question_id' => $question_id,
            'dice' => '[5, "add", 4]',
            'correct' => 0,
        ]);
        DB::table('options')->insert([
            'question_id' => $question_id,
            'dice' => '[4, "add", 3]',
            'correct' => 0,
        ]);
        DB::table('options')->insert([
            'question_id' => $question_id,
            'dice' => '[4, "add", 6]',
            'correct' => 1,
        ]);

        $pending_quiz_id = DB::table('quizzes')->insertGetID([
            'name' => 'Pending quiz',
            'status' => 'pending',
        ]);
    }
}
