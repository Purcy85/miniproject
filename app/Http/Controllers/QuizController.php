<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

class QuizController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the list of quizzes.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quizzes = Quiz::where('status', 'open')->get();

        return view('quizzes', ['quizzes' => $quizzes]);
    }

    /**
     * Show a quiz with questions.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showQuiz($quiz_id)
    {
        $quiz = Quiz::find($quiz_id);

        return view('quiz', ['quiz' => $quiz]);
    }
}
