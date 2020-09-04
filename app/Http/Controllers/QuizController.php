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
        $data = Quiz::all();
        return view('admin.onboarding.onboardingQuiz', compact('data'));
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
        $data = new Quiz;
        $data['user_id'] = auth()->user()->id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
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
        $data = Quiz::find($id);
        return view('admin.onboarding.onboardingQuizDetail', compact('data'));

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
        $data = Quiz::find($id);
        return view('admin.onboarding.editOnboardingQuiz', compact('data'));
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

        $data = Quiz::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
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
        $data = Quiz::find($id);
        $data->delete();
        return redirect('/onboarding/quiz');
    }
}
