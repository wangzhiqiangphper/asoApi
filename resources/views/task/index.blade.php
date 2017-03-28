@extends('app')
@section('content')
    @foreach($tasks as $task)
        <h1>{{ $task->id }}</h1>
        <p>{{ $task->keyword }}</p>
        <p>{{ $task->appId }}</p>
        <a href="{{ url('/task/edit',[$task->id]) }}">修改</a>
        <hr>
    @endforeach
@endsection