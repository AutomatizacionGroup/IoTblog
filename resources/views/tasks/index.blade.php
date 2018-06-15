@extends('layouts.master')

@section('content')
<h2>List of Tasks</h2>
    <ul>
        @foreach ($tasks as $task)
        <li>
            
            <a href="/tasks/ {{ $task->id }}">
            {{$task->id}}. {{$task->body}}
            </a>
        </li>
        @endforeach
    </ul>
    @endsection