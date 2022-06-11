<style>
.form-floating>.form-control, .form-floating>.form-select{
    height: calc(3.5rem + 2px);
    padding: 1rem 0.75rem;
}
.form-floating {
    position: relative;
}


/* .form-floating>label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    padding: 1rem 0.75rem;
    pointer-events: none;
    border: 1px solid transparent;
    transform-origin: 0 0;
    transition: opacity 0.1s ease-in-out,transform 0.1s ease-in-out;
}
.label {
     display: inline-block; 
}
.form-floating {
    position: relative;
} */


</style>
@extends('layouts.masteradmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center" style="background:#262626 !important; color:#ffff;">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                        <label for="email" class=" col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6 form-floating">
                                
                                <input id="email" type="email"  placeholder="Enter Email Id" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="password" class=" col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6 form-floating">

                                <input id="password" type="password" placeholder="Enter Your Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-dark ">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('auth.forgot') }}
                                </a>
                            </div>
                        </div>

                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
