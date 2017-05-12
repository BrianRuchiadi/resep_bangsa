@extends('layouts.admin.app')

@section('content')
    <div class="header">
        <div class="logo"></div>
    </div>
    <div class="login-body">
        <div class="login-box">
            <div class="login-box-title">Admin Reset Password</div>
            <form method="post" action="{{ url('/admin/password/email') }}">
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
                        <td colspan="2"><span class="errors">{{ $errors->first() }}</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input type="submit" value="Send Password Reset Link"> </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection



