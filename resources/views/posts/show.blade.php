@extends('layouts.master')

@section('content')



        <h1>{{ $post->title }}</h1>
        
        <p class="blog-post-meta">
            {{ $post->created_at->toDayDateTimeString() }} 
        </p>

        {{ $post->body }}

        <hr>

            <div class="comments">

                <ul class="list-group">

                    @foreach(@$post->comments as $comment)

                        <article>

                                <li class="list-group-item">

                                    <strong>
                                        {{ $comment->created_at->diffForHumans() }} : &nbsp;
                                    </strong>

                                    {{ $comment->body }}

                                </li>

                        </article>

                    @endforeach
                </ul>

            </div>

                <div class="card">

                    <div class="card-block">

                            <form method="POST" action="/posts/{{ $post->id }}/comments" >
                                {{ csrf_field() }}

                                <div class="form-group">

                                    <textarea name="body"  class="form-control" placeholder="Your Comment Here"></textarea>

                                </div>

                                <div class="form-group">     

                                        <button type="submit" class="btn btn-primary">Add Comment</button>

                                </div>

                            </form>


                    </div>

                </div>


@endsection