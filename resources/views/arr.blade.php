@extends('template')

@section('content')
    <pre>
    {{ print_r($keys, true) }}
    </pre>
@endsection