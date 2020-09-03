@extends('index')
@section('title', 'Materi Onboarding')
@section('content')
<div class="container my-5" >
    <table class="table">
    <tbody>
    <thead class="thead-light">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>View</th>
        <th>Download</th>
    </tr>
    @foreach($data as $i=>$data)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$data->judul}}</td>
        <td> <a href = "/onboarding/topicDetail/{{$data->id}}"> View </a> </td>
        <td> <a href = "/onboarding/downloadTopic/{{$data->file}}"> Download </a> </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <a class="btn btn-info my-3" href="/onboarding/createTopic">Tambah Materi Onboarding</a>
</div>

@endsection