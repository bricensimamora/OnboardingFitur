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
    <th>Action</th>
</tr>
</tbody>
</table>
<a class="btn btn-info" href="/onboarding/createQuiz">Tambah Soal</a>
</div>
@endsection