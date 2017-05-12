@extends('layouts.admin.app')

@section('content')
    <div class="header">
        <div class="logo"></div>
    </div>
    <div class="login-body">
        <div class="login-box">
            <div class="login-box-title">Admin Reset Password</div>
            <form method="post" action="{{ url('/admin/password/reset') }}">
            {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">

                <table>
                    <tr>
                        <td> Email </td>
                        <td> <input type="email" name="email" value="{{ old('email') }}" required> </td>
                    </tr>
                    <tr>
                        <td> Password </td>
                        <td> <input type="password" name="password" required> </td>
                    </tr>
                    <tr>
                        <td> Password Confirmation</td>
                        <td> <input type="password" name="password_confirmation" required> </td>
                       
                    </tr>
                    <tr>
                        <td colspan="2"><span class="errors">{{ $errors->first() }}</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input type="submit" value="Reset Password"> </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection

