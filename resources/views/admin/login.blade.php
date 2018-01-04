@extends('layouts.administrator_login')

@section('content')
<div class="content">






                    <form class="form-horizontal" method="POST" action="{{ route('admin.login') }}">
                            <h3 class="form-title">Sign In</h3>
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label visible-ie8 visible-ie9">E-Mail Address</label>


                                <input id="email" type="email" class="form-control form-control-solid placeholder-no-fix" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label visible-ie8 visible-ie9">Password</label>


                                <input id="password" type="password" class="form-control form-control-solid placeholder-no-fix" name="password" placeholder="Password"  required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>
                        <div class="form-actions">
                    			<button type="submit" class="btn btn-success uppercase">Login</button>
                          <label class="rememberme check">
                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                          </label>
                          <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                              Forgot Your Password?
                          </a>
                    		</div>






                    </form>


</div>
@endsection
