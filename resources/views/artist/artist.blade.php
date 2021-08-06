<h1>{{ $artist['Name'] }}</h1>


@foreach ($artist->albums as $album)


<li>
    <a href="/artist/{{ $artist['ArtistId'] }}/album/{{ $album['AlbumId'] }}">{{ $album['Title'] }}</a>
</li>

@endforeach
