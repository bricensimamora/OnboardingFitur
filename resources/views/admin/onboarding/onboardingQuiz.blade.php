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
    <th></th>
    @foreach($quiz as $i=>$quiz)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$quiz->title}}</td>
        <td>{{$quiz->description}}</td>
        <td> <a href = "/onboarding/quizDetail/{{$quiz->id}}"> Lihat Quiz </a> </td>   
        <td> <a href = "/onboarding/{{$quiz->id}}/question"> Buat Pertanyaan </a> </td>
        <td> <a href = "/onboarding/{{$quiz->id}}-{{$quiz->title}}"> Mulai Quiz</a> </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <a class="btn btn-info my-3" href="/onboarding/createQuiz">Tambah Quiz Onboarding</a>
</div>
@endsection