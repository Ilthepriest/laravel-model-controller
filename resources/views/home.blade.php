@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/app.css')}}">

@endsection

@section('content')
<div class="container">
   <div class="row row-cols-5 mt-5">
        @foreach($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="d-flex">
                    <strong class="me-2">Titolo:</strong>
                    <p>{{$movie->title}}</p>
                </div>
                <div class="d-flex">
                    <strong class="me-2">Titolo Originale:</strong>
                    <p>{{$movie->original_title}}</p>
                </div>

                <div class="d-flex">
                    <strong class="me-2">Nazione:</strong>
                    <p>{{$movie->nationality}}</p>
                </div>

                <div class="d-flex">
                    <strong class="me-2">Data:</strong>
                    <p>{{$movie->date}}</p>
                </div>

                <div class="d-flex">
                    <strong class="me-2">Voto:</strong>
                    <p>{{$movie->vote}}</p>
                </div>
            </div>
        </div> 
        @endforeach
   </div>
</div>

@endsection