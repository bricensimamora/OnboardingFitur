@extends('index')
@section('title', 'Quiz Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{$quiz->title}} </div>
                <div class="card-body">
                    <a class="btn btn-info" href="/onboarding/{{$quiz->id}}/createQuestion">Tambah Pertanyaan</a>       
                </div>
            </div>
            @foreach($quiz->question as $question)
            <div class="card">
                <div class="card-header"> {{$question->question}} </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($question->answer as $answer)
                            <li class="list-group-item">{{$answer->answer}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection