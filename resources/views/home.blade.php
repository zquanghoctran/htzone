@extends('layouts.app')

@section('content')
    <div id="container">
        <section id="login">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </section>

    </div>
@endsection
