@foreach ($movie as $movie)
    <body bgcolor="#9999FF">
    <p> <font color="#8b0000">電影 :{{ $movie->name}}</font></p>
    <p>類型:{{ $movie->category}}片</p>
    <p>{{ $movie->pic}}</p>
    <p>簡介 : {{ $movie->introduction}}</p>
    <p>片長 : {{ $movie->length}}</p>
    <hr size="8px" align="center" width="100%">
@endforeach



