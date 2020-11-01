@extends('layouts.app')

@section('content')
    @if(count($movies) > 0)
        @foreach($movies as $movie)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3>
                            <a href="/movies/{{$movie->id}}">
                                {{$movie->name}} - {{$movie->genre->name}}
                            </a>
                        </h3>
                        <small>{{$movie->description}}</small>
                    </div>
                     <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/movie-photos/{{$movie->photo}}">
                    </div>
                </div>
                <br/>
                <div class="content-flex content-end">Rating: {{$movie->avg_rating}}</div>
            </div>
        @endforeach
    @else
        <p>No movies found</p>
    @endif
@endsection