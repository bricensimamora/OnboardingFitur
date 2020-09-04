@extends('index')
@section('title', 'Materi Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h6 class="container my-3">{{$quiz->title}}</h6>
            <form action="/onboarding/{{$quiz->id}}-{{Str::slug($quiz->title)}}" method="POST">
                @csrf
                @foreach($quiz->question as $key=>$question)
                <div class="card my-3">
                <div class="card-header"><strong>{{$key+1}}</strong>.{{$question->questionQuiz}}</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($question->answer as $answer)
                            <label for="answer{{$answer->id}}">
                                <li class="list-group-item">
                                    <input type="radio" name="responses[{{$key}}][answer_id]" id="answer{{$answer->id}}" value="{{$answer->id}}">
                                    {{$answer->answer}}
                                    <input type="hidden" name="responses[{{$key}}][question_id]"  value="{{$question->id}}">
                                </li>
                            </label>
                            @endforeach
                        </ul>
                        @error('responses.' . $key . '.answer_id')
                            <small class="text-danger">{{$message}}</small>
                        @enderror          
                    </div>
                </div>
                @endforeach
                <div class="form-group"> 
                    <input class="btn btn-warning my-2" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection