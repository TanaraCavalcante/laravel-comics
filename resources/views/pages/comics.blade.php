@extends("layouts.app")

@section("page-title", "comics")

@section("main-content")
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($comics as $comic)
            <div class="card col-3 m-2">
                <img src="{{$comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"]}}">
                <div class="card-body">
                <h5 class="card-title text-center">{{ $comic["title"]}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>



@endsection
