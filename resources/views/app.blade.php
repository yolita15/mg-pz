<!DOCTYPE hmtl>
	<html>
    <head>
	<meta charset="utf-8">
    <title>МГ "К. Величков"</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}">
    <!-- Favicon -->

    <!-- Mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Mobile-->

    <!-- Bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ url('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}">

    <!-- jQuery library -->
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Bootstrap-->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <!-- CSS -->

    <link href='https://fonts.googleapis.com/css?family=Didact+Gothic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    </head>
<body>
    
    <header>					
        <!--Title-->
        <div id="header">
            <div class="container-fluid">

            <div class="row">
                <div class="col-xs-1">
                    <a href="{{ url('/') }}"><img src="{{ url('images/logo.png') }}"  class="img-responsive" alt="MG K. Velichkov" id="logo"></a>
                </div>
                <div class="col-sm-6" id="MG">МАТЕМАТИЧЕСКА ГИМНАЗИЯ <br>"КОНСТАНТИН ВЕЛИЧКОВ"</div>
                <div class="col-sm-16">
                    <p class="adress">
                        Адрес: гр. Пазарджик 4400, ул."Сан Стефано" №1 <br>
                        Тел/факс:  (034) 44 45 96, Пом. Директор (034) 44 23 09 <br>
                        E-mail: mgschoolpz@abv.bg
                    </p>
                </div>
            </div>
            </div>
        </div>
        <!--Title-->

        <!-- Menu -->
        <nav class="navbar navbar-inverse" id="nav-bar">
            {{--<div class="container-fluid">--}}
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mob-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>      
                </div>
                <div class="collapse navbar-collapse" id="mob-menu">
                    <ul class="nav navbar-nav">
                        <li class="{{ set_active(['welcome']) }}"><a href="{{ url('welcome') }}">Начало</a></li>
                        <li class="{{ set_active(['profiles']) }}"><a href="{{ url('profiles') }}">Прием</a></li>
                        <li class="{{ set_active(['program']) }}"><a href="{{ url('program') }}">Програма</a></li>
                        <li class="{{ set_active(['theteachers']) }}"><a href="{{ url('theteachers') }}">Учителите</a></li>
                        <li class="{{ set_active(['students']) }}"><a href="{{ url('students') }}">Учениците</a></li>
                        <li class="{{ set_active(['school']) }}"><a href="{{ url('school') }}">Училището</a></li>
                        <li class="{{ set_active(['history']) }}"><a href="{{ url('history') }}">История</a></li>
                        <li class="{{ set_active(['achievements']) }}"><a href="{{ url('achievements') }}">Успехи</a></li>
                        <li class="{{ set_active(['projects']) }}"><a href="{{ url('projects') }}">Проекти</a></li>
                        <li class="{{ set_active(['gallery']) }}"><a href="{{ url('gallery') }}">Галерия</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ set_active(['login']) }}"><a href="{{ url('logout') }}">
                                <span class="glyphicon glyphicon-education"></span> Дневник</a></li>
                    </ul>
                </div>

            {{--</div>--}}
        </nav>
        <!-- Menu -->
    </header>
        <script src="{{ url('js/app.js') }}"></script>
    <footer class="footer">
        <div id="ft">
            <a href="{{url('https://www.facebook.com/mgpazardjik/')}}" target="new" id="ft">
                <img src="{{ url('images/fb-logo.png')}}" width="14">   МГ "Константин Величков", гр. Пазарджик</a>
        </div>
        <div id="ft"><span class="glyphicon glyphicon-copyright-mark"></span> <i>2016 Yoanna & Stanislava</i>

        </div>
    </footer>

        </body>

    @yield('content')
</html> 