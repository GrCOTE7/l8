@extends('layouts.u')

@section('title', 'U')

@section('content')

    <h1>Test</h1>

    <hr>

    Date : {{ \Carbon\Carbon::now()->isoFormat('LL') }}
    <br>
    <i>({{ \Carbon\Carbon::now()->calendar() }})</i>

    <hr>

    <p>Locale: <strong>{{ $theLocale }}</strong></p>

    <p>@lang( $msg ) !</p>

    <p>@lang('We have got') {{ $subscribers }} @lang($textSubs).</p>

    <p>{{ $user->name }}: <strong>{{ env('MAIL_FROM_ADDRESS') }}</strong></p>

@endsection
