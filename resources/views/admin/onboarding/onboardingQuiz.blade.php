@extends('index')
@section('title', 'Quiz Onboarding')
@section('content')
<div class="container my-5" >
<table class="table">
<tbody>
<thead class="thead-light">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Deskripsi</th>
    <th>Action</th>
    <th></th>
    @foreach($data as $i=>$data)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        <td> <a href = "/onboarding/quizDetail/{{$data->id}}"> Lihat Quiz </a> </td>   
        <td> <a href = "/onboarding/{{$data->id}}/createQuestion"> Buat Pertanyaan </a> </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <a class="btn btn-info my-3" href="/onboarding/createQuiz">Tambah Quiz Onboarding</a>
</div>
@endsection