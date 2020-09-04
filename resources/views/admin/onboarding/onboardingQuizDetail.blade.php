@extends('index')
@section('title', 'Materi Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Topic Quiz : {{$quiz->title}}</div>
                    <div class="card-body">
                        <a> {{$quiz->description}}</a>
                        <div class="container my-3">
                            <a class="btn btn-primary" href="/onboarding/editQuiz/{{ $quiz->id }}">Edit</a>
                            <a class="btn btn-danger" href="/onboarding/deleteQuiz/{{ $quiz->id }}">HAPUS</a>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection