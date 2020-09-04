@extends('index')
@section('title', 'Materi Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$data->title}}</div>
                    <div class="card-body">
                        <a href="/onboarding/question/{{$data->id}}"> </a>
                        <div class="container my-3">
                            <a class="btn btn-primary" href="/onboarding/editQuestion/{{ $data->id }}">Edit</a>
                            <a class="btn btn-danger" href="/onboarding/deleteQuestion/{{ $data->id }}">HAPUS</a>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection