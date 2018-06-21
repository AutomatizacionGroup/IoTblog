@extends('layouts.master')

@section('content')

<div class="wrapper row3">
        <main class="hoc container clear"> 
            <div class="content"> 
                <div id="comments">

                <h1>Publish a Post</h1>

                <hr>

                <form method="POST" action="/posts">
                    {{ csrf_field()}}
                
                    <div class="two_third">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" 
                        id="title" name='title' required>

                    </div>

                    <div class="block clearp">
                        <label for="Body">Body</label>
                        <textarea name="body" id="body" cols="25" rows="10" 
                        class="form-control" required></textarea>
                    </div>

                    <div class="form-group">        
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>


                    @include('layouts.errors')

                </form>
            </div>
            </div>
        </main>


    </div>
@endsection