<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Quiz;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Question::all();
        return view('admin.onboarding.onboardingQuestion', compact('data'));
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
        // $data = new Question;
        // $data['quiz_id'] = quiz()->id;
        
        // $data->questionQuiz = $request->questionQuiz;
        // $data->save();
        // return redirect('/onboarding/question');
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
        //
        $data = Question::find($id);
        return view('admin.onboarding.editOnboardingQuestion', compact('data'));
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
        $data = Question::find($id);
        $data->questionQuiz = $request->questionQuiz;
        $data->save();
        return redirect ('/onboarding/question');
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
        return redirect('/onboarding/question');
    }
}
