@extends('layout.login&register')

@section('content')



    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
        @csrf


        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
            <span class="focus-input100"></span>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>@enderror

            <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input id="password" class="input100 @error('password') is-invalid @enderror"
                   type="password" name="password" required autocomplete="current-password" placeholder="Password">
            <span class="focus-input100"></span>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <span class="symbol-input100">
               <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
        </div>


        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember"
                   id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>


            <div class="container-login100-form-btn">
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Login') }}
                    </button>
                    @if (Route::has('password.request'))

                        <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
                            <a class="txt2" href="{{ route('password.request') }}">
                                Username / Password?
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <div class="text-center p-t-136">
                <a class="txt2" href="register">
                    Create your Account
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </form>

@endsection
