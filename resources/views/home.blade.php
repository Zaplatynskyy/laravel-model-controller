@extends('layouts.base')

@section('PageTitle')
    My Movies
@endsection

@section('PageContent')
    <div class="container">
        <div class="row">

            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{$movie->title}}</h2>
                    <h3>{{$movie->original_title}}</h3>
                    <div class="text">
                        <div class="nationality">{{$movie->nationality}}</div>
                        <div class="vote">{{$movie->vote}}</div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection