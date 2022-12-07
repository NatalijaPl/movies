
<div class="blog-post">
    <h2>Movie:</h2>
    <h4 class="blog-post-title">{{ $movie->title }}</h4>
    <p class="blog-post-meta">by: {{ $movie->director }}
        <a href="/users/{{ $movie->title }}"></a>
    </p>
    <p>
        Genre: {{ $movie->genre }}
    </p>
    <p>
        Year: {{ $movie->year }}
    </p>
    <p>
        Storyline: {{ $movie->storyline }}
    </p>
    </p>
    @if(count($movie->comments))
          <p><br><strong>Comments:</strong><br></p>
          <ul>
            @foreach($movie->comments as $comment)
              <li>
                <p>{{ $comment->content }}</p>
                <p>{{ $comment->created_at }}</p>
              </li>
            @endforeach
          </ul>
    @endif
    <form method="POST" action="{{ url('/comments/add/' . $movie->id) }}">
        {{ csrf_field() }}
            <label for="content">Comment</label>
            <br>
            <br>
            <input type="text" class="form-control" id="content" name="content"/>
            <br>
            <br>
            <button type="submit" class="btn btn-success">add comment</button>
    </form>

