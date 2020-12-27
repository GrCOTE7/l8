@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-small uk-section-muted uk-flex uk-flex-center">
        <div class="uk-card uk-card-default uk-card-body uk-width-large">
            <h2 class="uk-card-title">@lang('Update Password')</h2>
            <form method="POST" action="{{ route("user-password.update")  }}" class="uk-form-stacked">
                @csrf
                @method('PUT')
                @if (session('status'))
                    <div uk-alert class="uk-alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="uk-margin">
                    <label for="current_password" class="uk-form-label">
                        {{ __('Current Password') }}
                    </label>
                    <div class="uk-form-control">
                        <input id="current_password" type="password"
                               class="uk-input @error('current_password') uk-form-danger @enderror" name="current_password" required>
                        @error('current_password')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="password" class="uk-form-label">
                        {{ __('New Password') }}
                    </label>
                    <div class="uk-form-control">
                        <input id="password" type="password"
                              class="uk-input @error('password') uk-form-danger @enderror" name="password" required>
                        @error('password')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="password_confirmation" class="uk-form-label">
                        {{ __('Confirm Password') }}
                    </label>
                    <div class="uk-form-control">
                        <input id="password_confirmation" type="password"
                              class="uk-input" name="password_confirmation" required>
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-control">
                        <button type="submit" class="uk-button uk-button-primary">
                            {{ __('Save') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
