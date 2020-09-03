@extends('index')
@section('title', 'Ubah Materi Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Quiz </div>
                    <div class="card-body">
                    <form action="/onboarding/updateQuiz/{{$data->id}}" method= "POST">
                        @csrf
                        <div class="form-group"> 
                            <label for="title">Judul Quiz</label>
                            <input class="form-control my-2" name="title" type="text" placeholder="Judul" id="title" value = "{{$data->title}}">
                        </div>
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        <div class="form-group"> 
                            <label for="description">Deskripsi Quiz</label>
                            <input class="form-control my-2" name="description" type="text" placeholder="Deskripsi Quiz" id="description" value = "{{$data->description}}">
                        </div>
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        <div class="form-group"> 
                            <input class="btn btn-primary my-2" type="submit" value="Submit">
                            <a class="btn btn-danger" href="/onboarding/quiz">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection