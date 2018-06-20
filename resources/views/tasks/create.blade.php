@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>create a task</h1>

        <hr>

        <form method="POST" action="/todo">
            {{ csrf_field()}}
        
            <div class="form-group">
                <label for="task">Task</label>
                <input type="text" class="form-control" 
                id="task" name='task' required>

            </div>



            <div class="form-group">        
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>


            @include('layouts.errors')

        </form>


    </div>
@endsection