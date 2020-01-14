@extends("layouts.baseLayout")

@section("content")
    <div class="cds-container">
        @foreach ($albums as $album)
            <div class="cd">         
                <img src="{{$album["poster"]}}" />
                <h3>{{$album["title"]}}</h3>
                <small>{{$album["author"]}}</small>
                <strong>{{$album["year"]}}</strong>
            </div>
        @endforeach        
    </div>
@endsection
