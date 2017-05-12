@extends('layouts.admin.app')

@section('content')
    <div class="header">
        <div class="logo"></div>
    </div>
    <div class="login-body">
        <div class="login-box">
            <div class="login-box-title">Admin Login</div>
            <form method="post" action="{{ url('/admin/login') }}">
            {{ csrf_field() }}
                <table>
                    <tr>
                        <td> Email </td>
                        <td> <input type="email" name="email" value="{{ old('email') }}" required> </td>
                        @if ($errors->has('email'))
                                    <span>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </tr>
                    <tr>
                        <td> Password </td>
                        <td> <input type="password" name="password" required> </td>
                        @if ($errors->has('password'))
                                    <span>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input type="submit" value="Login"><a href="{{ url('admin/password/reset') }}"> Forgot your password ? </a> </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
