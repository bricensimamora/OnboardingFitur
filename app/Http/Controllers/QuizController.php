<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quiz = Quiz::all();
        return view('admin.onboarding.onboardingQuiz', compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.onboarding.createOnboardingQuiz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validateData = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $quiz = new Quiz;
        $quiz['user_id'] = auth()->user()->id;
        $quiz->title = $request->title;
        $quiz->description = $request->description;
        $quiz->save();
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
        $quiz = Quiz::find($id);
        return view('admin.onboarding.onboardingQuizDetail', compact('quiz'));

    }

    public function startQuiz(Quiz $quiz, $slug)
    {
        $quiz->load('question.answer');
        return view('admin.onboarding.onboardingstartQuiz', compact('quiz'));

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
        $quiz = Quiz::find($id);
        return view('admin.onboarding.editOnboardingQuiz', compact('quiz'));
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
        
        $vallidatedata = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $quiz = Quiz::find($id);
        $quiz->title = $request->title;
        $quiz->description = $request->description;
        $quiz->save();
        return redirect ('/onboarding/quiz');
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
        $quiz = Quiz::find($id);
        $quiz->delete();
        return redirect('/onboarding/quiz');
    }

   
}
