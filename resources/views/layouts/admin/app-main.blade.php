<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('pictures/logo-favicon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('assets/css/admin/vendor.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/admin/app.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/admin/vendor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/admin/app.js') }}" type="text/javascript"></script>

</head>
<body id="ng-controller"
    ng-controller="@yield('ngController') as vm"
    data-env="{{env('APP_ENV')}}"
    data-csrf="{{csrf_token()}}">

    <div class="wrapper">
            <div class="panel left">
                <div class="small-panel box">
                    <img class="logo" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA"/>
                </div><div class="small-panel box plain">
                    <p>Selamat datang, <strong>Brian Ruchiadi</strong>!</p>
                </div>
                <ul>
                    <li class="vertical-list"><div class="list-icon-small" id="admin"></div><a href="#" class="white"> Admin </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="user"></div><a href="#" class="white"> User </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="product"></div><a href="#" class="white"> Designer </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="product"></div><a href="#" class="white"> Product </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="transaction"></div><a href="#" class="white"> Transaction </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="mail"></div><a href="#" class="white"> Inquiry </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="bug"></div><a href="#" class="white"> Log & Bug</a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="sale"></div><a href="#" class="white"> Sales </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="page"></div><a href="#" class="white"> Page Control </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="page-stat"></div><a href="#" class="white"> Page Stats </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="redeem"></div><a href="#" class="white"> Redeem Transaction </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="tag"></div><a href="#" class="white"> Tag Control </a></li>
                </ul>
            </div><!--
         --><div class="panel right">
                <div class="small-panel box">
                    <div class="user-panel danger">
                        <img class="logout" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA"/>
                    </div>
                    <div class="user-panel notice" ng-click="app.func.notificationToggle">
                        <img class="notification" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA"/>

                        <div class="notification-panel">
                            <ul>
                                <li class="notification-list"></li><!--
                                --><li class="notification-list"></li><!--
                                --><li class="notification-list"></li><!--
                                --><li class="notification-list"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content-area">
                    @yield('content')
                </div>
            </div>
            <footer>
            </footer>
    </div>
</body>
</html>