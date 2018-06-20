@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    <h2>List of Tasks</h2>
    <hr>
        <ul>
            @foreach ($tasks as $task)
            <li>
                
                <a href="/todo/ {{ $task->id }}">
                {{$task->id}}. {{$task->body}}
                </a>
            </li>
            @endforeach
        </ul>
</div>
    @endsection