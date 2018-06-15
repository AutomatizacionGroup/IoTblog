
@extends('layouts.master')

@section('content')

    <h1>Task</h1>

    <h3>{{$task->id}}.  {{$task->body}}</h3>

    <a href="/tasks/" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Return to Tasks List</a

@endsection
