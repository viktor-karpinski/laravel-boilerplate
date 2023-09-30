@extends('master')

@section('preload')

@endsection

@section('navigation')

@endsection

@section('content')
    <section class="login-wrapper">
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="input-box">
                <label for="email">
                    your email
                </label>
                <input type="email" name="email" id="email" placeholder="admin@yourdomain.com">
                @if(session()->has('message'))
                    <p class="error">
                        {{ session()->get('message') }}
                    </p>
                @endif
            </div>
            <div class="input-box">
                <label for="password">
                    your password
                </label>
                <input type="password" name="password" id="password" placeholder="admin">
            </div>
            <button type="submit">
                login
            </button>
        </form>
    </section>
@endsection