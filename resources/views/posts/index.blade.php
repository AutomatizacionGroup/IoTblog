@extends('layouts.master')

@section('content')
<div class="wrapper row3">
    <main class="hoc container clear"> 
        <div class="content"> 



          @foreach($posts as $post)
            @include('posts.post')
          @endforeach



          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->
    </main>
  </div>

@endsection


