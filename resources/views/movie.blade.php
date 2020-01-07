<div style="font-family: '微軟正黑體'" ><h2><a href="http://localhost:8000/" target="_parent">返回首頁 </a></h2>
@foreach ($movie as $movie)
    <body bgcolor="#E6E6FA">
    <div style="font-family: '微軟正黑體' ">
        <p> <h3 font-color="#000000">電影 :{{ $movie->name}}</h3></p>
        <p>類型:{{ $movie->category}}片</p>
        <p>{{ $movie->pic}}</p>
        <p>簡介 : {{ $movie->introduction}}</p>
        <p>片長 : {{ $movie->length}}</p>
        <hr size="8px" align="center" width="100%">
    </div>
@endforeach
