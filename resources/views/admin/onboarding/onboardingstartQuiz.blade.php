@extends('index')
@section('title', 'Materi Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="container my-3">{{$quiz->title}}</h1>
            <form action="/onboarding/{{$quiz->id}}-{{Str::slug($quiz->title)}}" method="POST">
                @csrf
                <div class="form-group"> 
                    <label for="nama">Nama Anda</label>
                    <input class="form-control my-2" name="userQuizzes[nama]" type="text" placeholder="Masukkan Nama Anda" id="nama"
                    value="{{old('nama')}}">
                    @error('nama')
                        <small class="text-danger">{{$message}}</small>
                    @enderror 
                </div>
                <div class="form-group"> 
                    <label for="email">Email</label>
                    <input class="form-control my-2" name="userQuizzes[email]" type="email" placeholder="Masukkan Email Anda" id="email"
                    value="{{old('email')}}">
                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror 
                </div>
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
                <div class="form-group"> 
                    <input class="btn btn-primary my-2" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection