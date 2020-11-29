@extends('layouts.u')

@section('title', 'U')

@section('content')

    <h1>Test</h1>

    <hr>

    <p>Locale: <strong>{{ $theLocale }}</strong></p>

    <p>@lang( $msg )</p>

    <p>{{ $user->name }}: <strong>{{ env('MAIL_FROM_ADDRESS') }}</strong></p>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">© {{ now()->year }} Copyright:
                <a href="https://c57.fr.com/"> GC7</a> - @lang('All rights reserved.')
            </span>
        </div>
    </footer>



@endsection
