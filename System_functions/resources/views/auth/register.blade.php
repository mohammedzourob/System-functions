@extends('layout.login&register')

@section('content')






    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">

            <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">

            <span class="focus-input100"></span>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>@enderror

            <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
        </div>


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
        <div class="form-group row">
            <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

            <div class="col-md-6">
                <select  id="role_id" name="role_id"  class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required autocomplete="role_id">
                    <option value="-1">Select Type</option>
                    <option value="1">Admin1</option>
                    <option value="2">Admin2</option>
                    <option value="3">user</option>

                </select>

            </div>
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


        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input id="password-confirm" class="input100 @error('password') is-invalid @enderror"
                   type="password" name="password_confirmation" required autocomplete="current-password"
                   placeholder="confirm-password">
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


        <div class="container-login100-form-btn">
            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    {{ __('Login') }}
                </button>

            </div>
        </div>
        <div class="text-center p-t-136">
            <a class="txt2" href="login">
                Login
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
        </div>
    </form>

@endsection
