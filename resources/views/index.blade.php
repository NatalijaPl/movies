
<h1>All movies</h1>
<ul>
@foreach ($movies as $movie)
    <li>
        {{-- {{$movie->title}}
        {{$movie->storyline}} --}}
        <a href="{{ route('single-post', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
    </li>
    @endforeach
</ul>
