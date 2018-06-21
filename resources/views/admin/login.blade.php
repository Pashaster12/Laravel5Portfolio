<!DOCTYPE html>
<html lang="ru">
    
    @include('admin.layouts.htmlhead')
    
    <body class="fix-header fix-sidebar">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <div id="main-wrapper">

            <div class="unix-login">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="login-content card">
                                <div class="login-form">
                                    <h4>Laravel Ela Admin</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <label>Логин</label>
                                            <input type="text" id="login" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" name="login" value="{{ old('login') }}" placeholder="Логин" required autofocus>
                                            @if ($errors->has('login'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('login') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Пароль</label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Пароль" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Войти</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        @include('admin.layouts.scripts')
        
    </body>
</html>