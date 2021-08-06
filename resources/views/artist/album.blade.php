<h1>{{ $artist['Name'] }}</h1>

<h2>{{ $artist->album['Title'] }}</h2>

<table border="1">
    <thead>
        <tr>
            <th>Track Id</th>
            <th>Track Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($artist->album->tracks as $track)
        <tr>
            <td>{{ $track['TrackId']}} </td>
            <td>{{ $track['Name']}} </td>
        </tr>
        @endforeach
          
    </tbody>
</table>


