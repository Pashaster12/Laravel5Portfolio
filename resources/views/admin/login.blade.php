<!DOCTYPE html>
<html>
    @include('admin.layouts.htmlhead')

    <body>
        <div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
            <div class="login-box bg-white box-shadow pd-30 border-radius-5">
                <img src="{{ asset('admin/images/login-img.png') }}" alt="login" class="login-img">
                <h2 class="text-center mb-30">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="input-group custom input-group-lg">
                        <input type="text" id="login" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" name="login" value="{{ old('login') }}" placeholder="Login" required autofocus>
                        @if ($errors->has('login'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('login') }}</strong>
                            </span>
                        @endif
                        
                        <div class="input-group-append custom">
                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="input-group custom input-group-lg">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        
                        <div class="input-group-append custom">
                            <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox mb-5">
				<input class="custom-control-input" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
				<label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="{{ __('Login') }}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @include('admin.layouts.scripts')
    </body>
</html>