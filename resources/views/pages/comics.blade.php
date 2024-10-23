@extends("layouts.app")

@section("page-title", "comics")

@section("main-content")

    @foreach ($comics as $comic)
        <ul>
            {{-- <li>
                <img src="" alt="">
            </li> --}}
            <li>
                Title: {{ $comic["title"]}}
            </li>
        </ul>
    @endforeach


@endsection
