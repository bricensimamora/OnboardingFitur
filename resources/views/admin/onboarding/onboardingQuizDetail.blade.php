@extends('index')
@section('title', 'Materi Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$quiz->title}}
                <br>{{$quiz->description}}</br></div>
                    <div class="card-body">
                        <div class="container my-3">
                        @foreach($quiz->question as $key=>$question)
                            <div class="card my-3">
                                <div class="card-header"><strong>{{$key+1}}</strong>.{{$question->questionQuiz}}</div>
                                    <div class="card-body">
                                        @error('responses.' . $key . '.answer_id')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror   
                                        <ul class="list-group">
                                            @foreach($question->answer as $answer)
                                                <label for="answer{{$answer->id}}">
                                                    <li class="list-group-item">
                                                        <input type="radio" name="responses[{{$key}}][answer_id]" id="answer{{$answer->id}}" 
                                                        {{ (old('responses.' . $key . '.answer_id') == $answer->id ) ? 'checked' : '' }}
                                                        value="{{$answer->id}}">
                                                        {{$answer->answer}} 
                                                        <input type="hidden" name="responses[{{$key}}][question_id]"  value="{{$question->id}}">
                                                    </li>
                                                </label>
                                            @endforeach
                                        </ul>       
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- <a class="btn btn-primary" href="/onboarding/editQuiz/{{ $quiz->id }}">Edit</a>
                        <a class="btn btn-danger" href="/onboarding/deleteQuiz/{{ $quiz->id }}">HAPUS</a>               -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection