@extends('layout')

@yield('header')

@section('title', 'Login Page')

@section('content')
    <div class="container is-half-desktop is-centered" style="padding: 20px;">
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" placeholder="Email">
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <div class="control">
                <label class="checkbox">
                    <input type="checkbox">
                        <a href="#">Remember Me</a>
                    </label>
            </div>
        </div>
        <div class="field">
        <p class="control">
            <button class="button is-success is-fullwidth">
            Login
            </button>
        </p>
        </div>
    </div>
@endsection

@yield('footer')