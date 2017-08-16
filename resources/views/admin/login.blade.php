@extends('layouts.admin-app')

@section('content')
<div id="login" class="tab-pane active">
            <form role="form" method="POST" action="{{ route('admin.login') }}">
                {{ csrf_field() }}
                <p class="text-muted text-center">
                    Enter your username and password
                </p>

                <input id="email" type="email" class="form-control top {{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                
                <input id="password" type="password" class="form-control bottom {{ $errors->has('password') ? ' has-error' : '' }}" name="password" required>

                <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
          </label>
        </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
@endsection
 