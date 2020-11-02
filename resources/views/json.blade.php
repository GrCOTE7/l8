@extends('templateJson')

@section('titre')
    <h1>
        Fichier Json
    </h1>
@endsection

@section('contenu')
    <h2>Contenu :</h2>
    <br>
    <pre>
    {{ $ajson }}
    </pre>
@endsection
