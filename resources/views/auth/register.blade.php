@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <h1 class="h1 my-3 py-3 fw-normal">Register</h1>

        <div class="container px-3">
        <div class="form-group form-floating mb-3">
            <input type="name" class="form-control" name="name" value="{{ old('name') }}" placeholder="Fullname" required="required" autofocus>
            <label for="floatingName">Nama Wajib Pajak</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="number" class="form-control" name="penghasilan" value="{{ old('penghasilan') }}" placeholder="10000000" required="required" autofocus>
            <label for="floatingPenghasilan">Penghasilan Per Bulan</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingUsername">NPWPD</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <input type="hidden" name="payment_confirmation" value="Belum">
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
        <p>Sudah punya akun? <a href="login">Click here!</a></p>

        <button class="btn btn-lg btn-primary" type="submit">Register</button>
        </div>
        
        @include('auth.partials.copy')
    </form>
@endsection