<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Onboarding;
use Illuminate\Support\Facades\Storage;

class OnboardingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Onboarding::all();
        return view('admin.onboarding.onboardingTopic', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.onboarding.createOnboardingTopic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
       $validateData = request()->validate([
        'judul'=> 'required',
        'file' => 'required',
        ]);

        $data  = new Onboarding;
        $data['user_id'] = auth()->user()->id;
        if($request->file('file')){
            $file = $request->file('file');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/', $fileName);
            $data->file = $fileName;
        }
        $data->judul = $request->judul;
        $data->save();
        return redirect('/onboarding/topic');
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
        $data = Onboarding::find($id);
        return view('admin.onboarding.onboardingTopicDetail', compact('data'));
    }

    public function download($file)
    {
        # code...
        return response()->download('storage/'.$file);
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
        $data = Onboarding::find($id);
        return view('admin.onboarding.editOnboardingTopic', compact('data'));
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
        $validateData = request()->validate([
            'judul'=> 'required',
            'file' => 'required',
            ]);
            
        $data = Onboarding::find($id);

        $data->judul = $request->input('judul') ;

        if($request->hasfile('file'))
        {   
        $file = $request->file('file');
            $extension = $request->file->getClientOriginalExtension();  //Get Image Extension
            $fileName =  uniqid().'.'.$extension;  //Concatenate both to get FileName (eg: file.jpg)
            $file->move('storage/', $fileName);  
            $name = $fileName; 
            $data->file = $name;
        }
        $data->save();
        return redirect ('/onboarding/topic');
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
        $data = Onboarding::find($id);
        Storage::delete($data->path);
        $data->delete();
        return redirect('/onboarding/topic ');
    }
}
