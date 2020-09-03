@extends('index')
@section('title', 'Materi Onboarding')
@section('content')

<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{$data->judul}}</div>
                    <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{url('storage/'.$data->file)}}" allowfullscreen></iframe>
                        </div>
                        <div class="container my-3">
                            <a class="btn btn-primary" href="/onboarding/editTopic/{{ $data->id }}">Edit</a>
                            <a class="btn btn-danger" href="/onboarding/deleteTopic/{{ $data->id }}">HAPUS</a>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection