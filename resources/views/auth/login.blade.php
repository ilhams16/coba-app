@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <h1 class="h3 py-3 my-3 fw-normal">Login</h1>

        @include('layouts.partials.messages')

        <div class="container px-3">
            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                <label for="floatingName">Email or NPWPD</label>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <p>Belum punya akun? <a href="register">Click Here!</a></p>
        </div>

        <button class="btn btn-lg btn-primary" type="submit">Login</button>
        
        @include('auth.partials.copy')
    </form>
@endsection