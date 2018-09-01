<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Прайс-лист</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">

</head>
<body>
<nav id="menu" class="navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse"><i class="glyphicon glyphicon-menu-hamburger"></i></button>
            <span id="logo" class="">
                    <a href="https://tapdom.ru/index.php?route=common/home"><img style="height: 40px"
                                                                                 src="storage/main/main-logo.png"
                                                                                 title="Tapdom" alt="Tapdom"
                                                                                 class="img-responsive"></a>
                </span>
            <!--<span id="category" class="visible-xs">Категории</span>-->
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav">
                <li><a href="#">Косметички</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Тапочки</a>
                    <div class="dropdown-menu" style="">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
                                <li><a href="#">Женские тапочки</a></li>
                                <li><a href="#">Мужские тапочки</a></li>
                                <li><a href="#">Детские тапочки</a></li>
                            </ul>
                        </div>
                        <a href="#" class="see-all">Показать все Тапочки</a></div>
                </li>
            </ul>

            <div class="pull-right" style="font-size: 16px;margin-top: 10px;">
                <a href="https://tapdom.ru/index.php?route=information/contact">
                    <i class="glyphicon glyphicon-phone"></i>
                </a> <span>+7 952 806 9447</span>
            </div>
        </div>

    </div>

</nav>


<main class="py-4">
    @yield('content')
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Информация</h5>
                <ul class="list-unstyled">
                    <li><a href="https://tapdom.ru/index.php?route=information/information&amp;information_id=4">О
                            нас</a></li>
                    <li><a href="https://tapdom.ru/index.php?route=information/information&amp;information_id=6">Информация
                            о доставке</a></li>
                    <li><a href="https://tapdom.ru/index.php?route=information/contact">Связаться с нами</a></li>
                    <li><a href="https://tapdom.ru/index.php?route=information/sitemap">Карта сайта</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p>Tapdom © 2018</p>
    </div>
</footer>
</body>
</html>
