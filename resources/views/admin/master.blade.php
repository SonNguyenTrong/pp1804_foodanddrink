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

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- google fonts -->

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">


</head>
<body>
    <div class="top">
        <div class="container">
            <nav class="navbar navbar-dark bg-faded navbar-fixed-top menutren">
                <a class="navbar-brand logo" href="#">SOTA.food</a>
                <ul class="navbar-nav flex-md-row menutrenphai">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cart</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Service</a>
                            </li>    
                        @else
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">Register <span class="sr-only">(current)</span></a>
                                </li>
                            @endif
                        @endauth
                    @endif   
                </ul>   
            </nav>
        </div> <!-- end menu(container) -->

        <div class="banner">
            <div class="container">
                <div class="col-sm push-sm-3 text-xl-center p-sm-5">
                    <h2 class="m-4">SOTA FOOD</h2>
                    <div class="trichdan">The only thing I like better than talking about food is eating</div>
                    <a href="" class="btn btn-danger m-2">Find Out</a>
                </div>
            </div>
        </div>  <!-- end banner -->

    </div> <!-- end top -->

    <div class="foodlist p-4 text-sm-center">
        <div class="container">
            @yield('content')
            <h6 class="toprate">Top-Rated Food</h6>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-white border-light bg-dark mb-3">
                        <img class="card-img-top" src="https://timedotcom.files.wordpress.com/2016/05/trump-fail-004.jpg" alt="">
                        <div class="card-block text-sm-center">
                            <h4 class="card-title">Chicken</h4>
                            <p class="card-text">chicken-fried steak and chicken-fried chicken have spread far beyond the boundaries of Texas.</p>
                            <a href="#" class="btn btn-primary m-3">Order</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card text-white border-light bg-dark mb-3">
                        <img class="card-img-top" src="https://timedotcom.files.wordpress.com/2016/05/trump-fail-004.jpg" alt="">
                        <div class="card-block text-sm-center">
                            <h4 class="card-title">Hamburger</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary m-3">Order</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card text-white border-light bg-dark mb-3">
                        <img class="card-img-top" src="https://timedotcom.files.wordpress.com/2016/05/trump-fail-004.jpg" alt="">
                        <div class="card-block text-sm-center">
                            <h4 class="card-title">Coca</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary m-3">Order</a>
                        </div>
                    </div>
                </div>

            </div>
        </div> {{-- end container --}}
    </div>    {{-- end foodlist --}}

    <!-- jquery -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript"></script>
    
    <!-- bootstrap <-->
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    

    

</body>

</html>