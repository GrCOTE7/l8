@extends('layouts.u')

@section('title', 'U')

@section('content')

    <h1>Test</h1>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        Locale: <strong>{{ $theLocale }}</strong>
        <br>
        @lang( $msg )
        <hr>
        @lang('All rights reserved.')

    </h2>

@endsection
