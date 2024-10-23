@extends("layouts.app")

@section("page-title", "comics")

@section("main-content")
    <div class="container">
        @foreach ($comics as $comic)

        <div class="card " style=" width: 18rem;">
            <img src="{{$comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"]}}">
            <div class="card-body">
            <h5 class="card-title">{{ $comic["title"]}}</h5>
            </div>
        </div>
        @endforeach
    </div>



@endsection
