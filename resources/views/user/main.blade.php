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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                </ul>   
            </nav>
        </div> <!-- end menu(container) -->
   

        <div class="banner">
            <div class="container">
                <div class="col-sm push-sm-3 text-xl-center">
                    <h2>SOTA FOOD</h2>
                    <div class="trichdan">The only thing I like better than talking about food is eating</div>
                    <a href="" class="btn btn-danger nuttimhieu">Find Out</a>
                </div>
            </div>
        </div>  <!-- end banner -->

    </div> <!-- end top -->

    <!-- jquery -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript"></script>
    
    <!-- bootstrap <-->
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    

    

</body>

</html>