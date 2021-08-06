
<ul>
  

@foreach ($artists as $artist)


<li>
    <a href="/artist/{{ $artist['ArtistId'] }}/album">{{ $artist['Name'] }}</a>
</li>

@endforeach

</ul>