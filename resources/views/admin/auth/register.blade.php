@extends('layouts.admin.app')

@section('content')
    <div class="header">
        <div class="logo"></div>
    </div>
    <div class="login-body">
        <div class="login-box">
            <div class="login-box-title">Admin Register</div>
            <form method="post" action="{{ url('/admin/register') }}">
            {{ csrf_field() }}
                <table>
                    <tr>
                        <td> Username </td>
                        <td>  <input type="text" name="name" value="{{ old('name') }}" required > </td>
                    </tr>
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
                        <td> Password Confirmation</td>
                        <td> <input type="password" name="password_confirmation" required> </td>
                       
                    </tr>
                    <tr>
                        <td> Admin Pin </td>
                        <td> <input type="number" name="admin_pin" required> </td>
                     
                    </tr>
                    <tr>
                        <td colspan="2"><span class="errors">{{ $errors->first() }}</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input type="submit" value="Register"> </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection


