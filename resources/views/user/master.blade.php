<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- StyleSheets -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    
    <!-- google fonts -->

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">

    <!-- jquery -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>


</head>
<body>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="top">
        <div class="container">
            <nav class="navbar navbar-dark bg-faded navbar-fixed-top menutren">
                <a class="navbar-brand logo" href="#">SOTA.food</a>
                <ul class="navbar-nav flex-md-row menutrenphai">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item active">
                                <a class="nav-link" href="profile">{{ trans('messages.profile') }} <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ trans('messages.menu') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ trans('messages.cart') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">{{ trans('messages.logout') }}</a>
                            </li>    
                        @else
                            <li class="nav-item active">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">{{ trans('messages.login') }} <span class="sr-only">(current)</span></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">{{ trans('messages.register') }} <span class="sr-only">(current)</span></a>
                                </li>
                            @endif
                        @endauth
                    @endif   
                </ul>   
            </nav>
        </div> <!-- end menu(container) -->
        <div class="banner">
            <div class="container-fluid">
                <div class="col-sm push-sm-3 text-xl-center p-sm-5">
                    <h2 class="m-5 tieudeto">NewMoutain Food</h2>
                    <div class="trichdan">{{ trans('messages.firstmess') }}</div>
                    <a href="" class="btn btn-danger m-2 nutaction">{{ trans('messages.findout') }}</a>
                </div>
            </div>
        </div>  <!-- end banner -->
    </div> <!-- end top -->
    <div class="noidung">
        @yield('content')
    </div>
    <div class="noidung2">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12">
                    <div class="text-sm-center">
                        <h3 class="m-5 tieudeto">At Your Service</h3>
                    </div>
                </div> <!-- hetcol -->
            </div>  <!-- hetrow -->
            <div class="row 4cot text-xl-center">
                <div class="col-sm-3">
                    <div class="fa fa-book fa-3x"></div>
                        <h4>{{ trans('messages.menu') }}</h4>
                        <p>{{ trans('messages.menumess') }}</p>
                </div>
                <div class="col-sm-3">
                    <div class="fa fa-shopping-cart fa-3x"></div>
                        <h4>{{ trans('messages.cart') }}</h4>
                        <p>{{ trans('messages.cartmess') }}</p>
                </div>
                <div class="col-sm-3">
                    <div class="fa fa-paper-plane fa-3x"></div>
                        <i class="fas fa-book-open"></i>
                        <h4>{{ trans('messages.shipping') }}</h4>
                        <p>{{ trans('messages.shippingmess') }}</p>
                </div>
                <div class="col-sm-3">
                    <div class="fa fa-heart fa-3x"></div>
                        <i class="fas fa-book-open"></i>
                        <h4>{{ trans('messages.quality') }}</h4>
                        <p>{{ trans('messages.qualitymess') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="noidung3">
        <div class="row">
            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/fastfood.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.fastfood') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/dessert.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.dessert') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/drink.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.drink') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/dish.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.dish') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/fruit.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.fruit') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sp">
                    <img src="/img/cake.jpg" alt="">
                    <div class="ten">
                        <div class="goi">
                            <div class="danhmuc">{{ trans('messages.category') }}</div>
                            <div class="tenchitiet">{{ trans('messages.cake') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- het noidung3 -->
    <div class="footer">
        <div class="footer-grid">
            <h3>Navigation</h3>
            <ul class="list1">
              <li><a href="index.html">Home</a></li>
              <li><a href="radio.html">All Foods</a></li>
              <li><a href="browse.html">Menu</a></li>
              <li><a href="radio.html">New Category</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="footer-grid">
            <h3>Our Account</h3>
            <ul class="list1">
              <li><a href="#" data-toggle="modal" data-target="#myModal5">Your Account</a></li>
              <li><a href="#">Personal information</a></li>
              <li><a href="#">Addresses</a></li>
              <li><a href="#">Discount</a></li>
              <li><a href="#">Orders history</a></li>
              <li><a href="#">Addresses</a></li>
              <li><a href="#">Search Terms</a></li>
            </ul>
        </div>
        <div class="footer-grid">
            <h3>Our Support</h3>
            <ul class="list1">
              <li><a href="contact.html">Site Map</a></li>
              <li><a href="#">Search Terms</a></li>
              <li><a href="#">Advanced Search</a></li>
              <li><a href="#">Mobile</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="#">Mobile</a></li>
              <li><a href="#">Addresses</a></li>
            </ul>
        </div>
            <div class="footer-grid">
                <h3>Newsletter</h3>
                <p class="footer_desc">Follow us for news and free food recipe inside and outside of your country traditional.</p>
                <div class="search_footer">
                    <form>
                        <input type="text" placeholder="Email...." required="">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="footer-grid footer-grid_last">
                <h3>About Us</h3>
                <p class="footer_desc">Some food blogger and dev joining together to create a website that bring quality food to others.</p>
                <p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
                <p class="email">Email : &nbsp;<span><a href="mailto:mail@example.com">info(at)mailing.com</a></span></p>   
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" id="loginModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="loginModallabel">{{ trans('messages.signin')}}</h4>
                    <button type="button" name="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- modal login -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <a href="{{route('register')}}" class="text-center">Register New Member</a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript"></script>
    
    <!-- bootstrap -->
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
