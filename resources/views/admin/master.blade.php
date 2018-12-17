<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- StyleSheets -->

</head>
<body>
    <div class="top-panel">
        <div class="top-panel_container">
            <div class="top-panel_contact-block">
                <i class="contact-block__icon nc-icon-mini ui-3_phone"></i>
                <span class="contact-block__label">
                    <a href="">Call:(123) 456789</a>
                </span>
            </div>
            <div class="top-panel_login">
                 <!-- Authen login -->
                @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                @endguest
            </div>
        </div>
    </div>
    <div class="header-container">
        <div class="header-container-wrap">
            <div class="site-branding">
                <a href="">
                    <img src="" alt="">
                </a>
            </div>
            <div class="header-nav">
                <ul id="main-menu" class="menu-bar">
                    <li id="menu-item-home" class="menu-home"><a href="">HOME</a></li>
                    <li id="menu-item-about" class="menu-about"><a href="">ABOUT</a></li>
                    <li id="menu-item-order" class="menu-order"><a href="">ORDER</a></li>
                    <li id="menu-item-order" class="menu-order"><a href="">ORDER</a></li>
                    <li id="menu-item-order" class="menu-order"><a href="">ORDER</a></li>
                    <li id="menu-item-order" class="menu-order"><a href="">ORDER</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="content" class="site-content">
        @yield('content')
    </div>
</body>    