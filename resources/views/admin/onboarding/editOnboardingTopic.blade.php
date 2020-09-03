@extends('index')
@section('title', 'Ubah Materi Onboarding')
@section('content')
<div class="container my-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Create New Topic Onboarding </div>
                    <div class="card-body">
                    <form method= "POST" action="/onboarding/updateTopic/{{$data->id}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group"> 
                            <label for="judul"> Judul Materi Onboarding</label>
                            <input class="form-control my-2" name="judul" type="text" id="judul" value="{{ $data->judul}}">
                        </div>
                        @error('judul')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        <div class="form-group"> 
                            <label for="uploadfile"> Upload Materi onboarding</label>
                            <input class="form-control-file my-2" name="file" type="file" id="uploadfile" value="{{$data->file}}">
                        </div>
                        @error('file')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        <div class="form-group"> 
                            <input class="btn btn-primary my-2" type="submit" value="Submit">
                            <a class="btn btn-danger" href="/onboarding/topic">Cancel</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection