@extends('index')
@section('title', 'Materi Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h6 class="container my-3">{{$quiz->title}}</h6>
            <form action="#" method="POST">
                @csrf
                @foreach($quiz->question as $key=>$question)
                <div class="card my-3">
                <div class="card-header"><strong>{{$key+1}}</strong>.{{$question->questionQuiz}}</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($question->answer as $answer)
                            <label for="answer{{$answer->id}}">
                                <li class="list-group-item">
                                    <input type="radio" name="#" id="answer{{$answer->id}}">
                                    {{$answer->answer}}
                                </li>
                            </label>
                            @endforeach
                        </ul>           
                    </div>
                </div>
                @endforeach
                <a class="btn btn-warning" href="#">Selesai</a>
            </div>
        </div>
    </div>
</div>
@endsection