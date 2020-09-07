@extends('index')
@section('title', 'Buat Quiz Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Buat Pertanyaan Baru </div>
                    <div class="card-body">
                        <form action="/onboarding/{{$quiz->id}}/storeQuestion" method= "POST">
                            @csrf
                            <div class="form-group"> 
                                <label for="question">Pertanyaan</label>
                                <input class="form-control my-2" name="questionQuiz[questionQuiz]" type="text" placeholder="Pertanyaan" id="question" 
                                value="{{old('questionQuiz.questionQuiz')}}">
                            </div>
                            @error('questionQuiz')
                                <small class="text-danger">{{$message}}</small>
                            @enderror

                            <div class="form-group">
                                <fieldset>
                                    <legend>Pilihan</legend>
                                    <div class="form-group"> 
                                        <label for="answer1">Pilihan1</label>
                                        <input class="form-control my-2" name="answers[][answer]" type="text" placeholder="Pilihan1" id="answer1"
                                        value="{{old('answer.0.answer')}}">
                                    </div>
                                    @error('answers.0.answer')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    <div class="form-group"> 
                                        <label for="answer2">Pilihan2</label>
                                        <input class="form-control my-2" name="answers[][answer]" type="text" placeholder="Pilihan2" id="answer2"
                                        value="{{old('answer.1s.answer')}}">
                                    </div>
                                    @error('answers.1.answer')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    <div class="form-group"> 
                                        <label for="answer3">Pilihan3</label>
                                        <input class="form-control my-2" name="answers[][answer]" type="text" placeholder="Pilihan3" id="answer3"
                                        value="{{old('answer.2.answer')}}">
                                    </div>
                                    @error('answers.2.answer')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    <div class="form-group"> 
                                        <label for="answer4">Pilihan4</label>
                                        <input class="form-control my-2" name="answers[][answer]" type="text" placeholder="Pilihan4" id="answer4"
                                        value="{{old('answer.3.answer')}}">
                                    </div>
                                    @error('answers.3.answer')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </fieldset> 
                            </div>

                            <div class="form-group"> 
                                <input class="btn btn-primary my-2" type="submit" value="Submit">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection