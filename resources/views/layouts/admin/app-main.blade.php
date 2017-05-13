<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

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
                <div class="title small-panel box">
                    <h1> Resep Bangsa </h1>
                </div><div class="small-panel box plain">
                    <p>Selamat datang, <strong>Brian Ruchiadi</strong>!</p>
                </div>
                <ul>
                    <li class="vertical-list"><div class="list-icon-small" id="admin"></div><a href="#" class="white"> Admin </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="user"></div><a href="#" class="white"> User </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="location"></div><a href="#" class="white"> Daerah </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="food"></div><a href="#" class="white"> Bahan </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="food"></div><a href="#" class="white"> Makanan </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="book"></div><a href="#" class="white"> Resep Makanan </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="report"></div><a href="#" class="white"> Laporan User</a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="mail"></div><a href="#" class="white"> Inquiry </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="page-stat"></div><a href="#" class="white"> Page Stats </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="log"></div><a href="#" class="white"> Logs </a></li>
                    <li class="vertical-list"><div class="list-icon-small" id="setting"></div><a href="#" class="white"> Setting </a></li>
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