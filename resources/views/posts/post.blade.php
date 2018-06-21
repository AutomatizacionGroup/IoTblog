
    <div class="card">

        <h5 class="card-header">{{ $post->title }}</h5>

        <div class="card-body">

          <h5 class="card-title">{{ $post->created_at->toDayDateTimeString() }}</h5>

          <p class="card-text">{{ substr($post->body, 0, 600)}} ...</p>

          <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read Post</a>

            <hr>
        
        </div>

      </div>


