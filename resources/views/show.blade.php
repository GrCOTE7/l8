@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title"># {{ $film->id }} -&nbsp;<strong>{{ $film->title }}</strong></p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Année de sortie : <strong>{{  $film->year  }}</strong></p>
                <hr>
                <p>{{ $film->description }}</p>
            </div>
        </div>
    </div>
@endsection
