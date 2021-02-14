<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

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
        // TODO: load in quizzes from db

        $quizzes = Quiz::where('status', 'open')->get(); //['Quiz 1', 'Quiz 2', 'Quiz 3'];

        return view('quizzes', ['quizzes' => $quizzes]);
    }
}
