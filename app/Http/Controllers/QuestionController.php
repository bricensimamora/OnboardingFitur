<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Quiz;
use App\Answer;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Quiz $quiz)
    {
        $quiz->load('question.answer');
        return view('admin.onboarding.onboardingQuestion', compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Quiz $quiz)
    {
        return view('admin.onboarding.createOnboardingQuestion', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Quiz $quiz)
    {
        $data = request()->validate([
            'questionQuiz.questionQuiz' => 'required',
            'answers.*.answer' => 'required'
        ]);
        
        $question = $quiz->question()->create( $data['questionQuiz']);
        $question->answer()->createMany($data['answers']);
        return redirect('/onboarding/quiz');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Question::find($id);
        return view('admin.onboarding.onboardingQuestionDetail', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Question::find($id);
        $data->delete();
        return redirect('/onboarding/quiz');
    }
}
