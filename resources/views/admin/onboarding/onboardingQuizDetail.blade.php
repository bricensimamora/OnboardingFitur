@extends('index')
@section('title', 'Materi Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quiz Detail</div>
                    <div class="card-body">
                        <h6>Topic Quiz : {{$data->title}}</h6>
                        <a> {{$data->description}}</a>
                        <div class="container my-3">
                            <a class="btn btn-primary" href="/onboarding/editQuiz/{{ $data->id }}">Edit</a>
                            <a class="btn btn-danger" href="/onboarding/deleteQuiz/{{ $data->id }}">HAPUS</a>
                            <a class="btn btn-warning" href= "/onboarding/question">Buat Pertanyaan</a>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection