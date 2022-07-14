@extends('templates.base')

@section('pageMain')
    <main>
        @foreach ($movies as $movie)
            <li>{{$movie->title}}</li>
        @endforeach
    </main>
@endsection