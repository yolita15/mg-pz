@extends('app')

@section('content')
    <head>

        <!-- Slider -->
        <link rel="stylesheet" type="text/css" href="{{ url('slider/css/style.css') }}">
        <noscript>
            <link rel="stylesheet" type="text/css" href="{{ url('slider/css/noscript.css') }}">
        </noscript>
        <!-- Slider -->
    </head>
    <body>
    <!-- slider -->

    <wrapper>
        <div id="ei-slider" class="ei-slider">
            <ul class="ei-slider-large">
                <li>
                    <img src="{{ url('slider/images/large/8989.JPG') }}" alt="image06">
                    <div class="ei-title">
                        {{--<h2>Успехът е да се движиш от провал към провал, без да губиш</h2>--}}
                        {{--<h3>ЕНТУСИАЗЪМ</h3>--}}
                    </div>
                </li>
                <li>
                    <img src="{{ url('slider/images/large/9999.JPG') }}" alt="image01">
                    <div class="ei-title">
                        {{--<h2>Знанието е съкровище,<br> което ще последва своя собственик</h2>--}}
                        {{--<h3>НАВСЯКЪДЕ</h3>--}}
                    </div>
                </li>
                <li>
                    <img src="{{ url('slider/images/large/9696.JPG') }}" alt="image02">
                    <div class="ei-title">
                        {{--<h2>Великото изкуство <br>  да се научи много е да се започне с</h2>--}}
                        {{--<h3>МАЛКО</h3>--}}
                    </div>
                </li>
                <li>
                    <img src="{{ url('slider/images/large/9090.jpg') }}" alt="image03">
                    <div class="ei-title">
                        {{--<h2>Бих предпочел да вървя с приятел в тъмното, отколкото сам в</h2>--}}
                        {{--<h3>СВЕТЛИНАТА</h3>--}}
                    </div>
                </li>
                <li>
                    <img src="{{ url('slider/images/large/9797.jpg') }}" alt="image04">
                    <div class="ei-title">
                        {{--<h2>Образованието дава <br> отговори на незададени </h2>--}}
                        {{--<h3>въпроси</h3>--}}
                    </div>
                </li>
                <li>
                    <img src="{{ url('slider/images/large/7878.jpg') }}" alt="image05">
                    <div class="ei-title">
                        {{--<h2>Във всяка наука има толкова истина, <br> колкото има в нея</h2>--}}
                        {{--<h3>МАТЕМАТИКА</h3>--}}
                    </div>
                </li>
                <li>
                    <img src="{{ url('slider/images/large/9898.jpg') }}" alt="image07">
                    <div class="ei-title">
                        <h2></h2>
                        <h3></h3>
                    </div>
                </li>
            </ul><!-- ei-slider-large -->
            <ul class="ei-slider-thumbs">
                <li class="ei-slider-element">Current</li>
                <li><a href="#">Slide 6</a><img src="{{ url('slider/images/thumbs/8989.JPG') }}" alt="thumb06"></li>
                <li><a href="#">Slide 1</a><img src="{{ url('slider/images/thumbs/9999.JPG') }}" alt="thumb01"></li>
                <li><a href="#">Slide 2</a><img src="{{ url('slider/images/thumbs/9696.JPG') }}" alt="thumb02"></li>
                <li><a href="#">Slide 3</a><img src="{{ url('slider/images/thumbs/9090.jpg') }}" alt="thumb03"></li>
                <li><a href="#">Slide 4</a><img src="{{ url('slider/images/thumbs/9797.jpg') }}" alt="thumb04"></li>
                <li><a href="#">Slide 5</a><img src="{{ url('slider/images/thumbs/7878.jpg') }}" alt="thumb05"></li>
                <li><a href="#">Slide 7</a><img src="{{ url('slider/images/thumbs/9898.jpg') }}" alt="thumb07"></li>
            </ul><!-- ei-slider-thumbs -->
        </div><!-- ei-slider -->
    </wrapper>
    <!-- wrapper -->
    <!-- slider -->
    <!--JS-->
    <script type="text/javascript"
            src="{{ url('http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('slider/js/jquery.eislideshow.js') }}"></script>
    <script type="text/javascript" src="{{ url('slider/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('#ei-slider').eislideshow({
                animation: 'center',
                autoplay: true,
                slideshow_interval: 4000,
                titlesFactor: 0
            });
        });
    </script>
    <!--JS-->

    <div class="container">
        <h1><span class="glyphicon glyphicon-paperclip"></span> Актуално</h1>
        <br>

        <div class="row">

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <a href="{{ url('https://docs.google.com/forms/d/1fpkJ1ndBO4YmyAk2UEfFYcR7m0HvAG-xH-dbolGtyE0/viewform') }}"
                           target="new"><span class="glyphicon glyphicon-leaf"></span> АНКЕТА – НАШИЯТ ЕКОЛОГИЧЕН
                            ОТПЕЧАТЪК</a>
                        към проект Reflect the Facts to Act.

                        <br>
                        <br>
                        <a href=" {{ url('https://docs.google.com/forms/d/1wuH3PC8Bl4YqZUwv_bYRMUC6QpV_JoZJnhDIEd3HtQk/viewform') }}"
                           target="new"><span class="glyphicon glyphicon-zoom-in"></span> Анкета</a>
                        с цел проучване използване на новите методи в обучението по чужд език.
                        <br>
                        <br>
                        <a href="{{ url('pdf/grafik_vakancii.pdf') }}" target="new"><span
                                    class="glyphicon glyphicon-calendar"></span> График</a> на ваканциите и неучебните
                        дни за учебната 2015/2016г.
                        <br>
                        <br>
                        <a href="{{url('students#stipendii')}}"><span class="glyphicon glyphicon-piggy-bank"></span>
                            Отпускане на стипендии. </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-heading"><b>Национално външно оценяване в VII клас и ДЗИ</b></div>
                    <div class="panel-body"><b>18.05.2016 г.</b> – ДЗИ по български език и литература и НВО в VII клас
                        по български език и литература
                        <br>
                        <br>
                        <b>20.05.2016 г.</b> – Втори ДЗИ и НВО в VII клас по математика
                        <br>
                        <br>
                        Повече информация може да намерите на официалния сайт на <a
                                href="{{ url('http://www.mon.bg/?') }}" target="new">МОН.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </body>

@stop