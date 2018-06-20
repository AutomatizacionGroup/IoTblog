
@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

    <h1>Task</h1>

    <h3>{{$task->id}}.  {{$task->body}}</h3>

    
</div>
@endsection
