@extends('app.account.layouts.account')

@section('account')
    <form
        class="card-grid"
        action="{{ route('mailcoach-app.password') }}"
        method="POST"
    >
        @csrf
        @method('PUT')

        <x-text-field label="Password" name="password" type="password"  required />
        <x-text-field label="Confirm password" name="password_confirmation" type="password" required />

        <button type="submit" class="button">
            Save
        </button>
    </form>
@endsection
