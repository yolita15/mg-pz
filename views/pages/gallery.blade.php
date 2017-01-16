@extends('app')

@section('content')


    <head>
        <link href="{{ url('gal/css/lightbox.css') }}" rel="stylesheet">

    </head>

    <body>
    <div class="container">
        <h1><span class="glyphicon glyphicon-camera"></span> Откриване на учебната година</h1>
        <br><br>
        <div align="center">
            <a href="{{ url('gal/images/021.jpg') }}" data-lightbox="image-1" data-title="Музикалното оформление"><img
                        src="{{url('gal/images/thumbs/021.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/041.jpg') }}" data-lightbox="image-1" data-title="Красавиците от 11 клас"><img
                        src="{{url('gal/images/thumbs/041.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/051.jpg') }}" data-lightbox="image-1" data-title="Осмокласници с цветя"><img
                        src="{{url('gal/images/thumbs/051.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/061.jpg') }}" data-lightbox="image-1"
               data-title="9б прекрачват прага на любимото училище"><img src="{{url('gal/images/thumbs/061.jpg')}}"
                                                                         data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/071.jpg') }}" data-lightbox="image-1" data-title="Водещи за последен път"><img
                        src="{{url('gal/images/thumbs/071.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/081.jpg') }}" data-lightbox="image-1" data-title="Кандидат-завършващите от 12в"><img
                        src="{{url('gal/images/thumbs/081.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/091.jpg') }}" data-lightbox="image-1"
               data-title="Красивите ни госпожи по математика"><img src="{{url('gal/images/thumbs/091.jpg')}}"
                                                                    data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/101.jpg') }}" data-lightbox="image-1"
               data-title="Биологията и химията правят хората щастливи"><img src="{{url('gal/images/thumbs/101.jpg')}}"
                                                                             data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/111.jpg') }}" data-lightbox="image-1" data-title="Усмихнатите 9б"><img
                        src="{{url('gal/images/thumbs/111.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/131.jpg') }}" data-lightbox="image-1" data-title="11б отново заедно в МГ"><img
                        src="{{url('gal/images/thumbs/131.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/141.jpg') }}" data-lightbox="image-1"
               data-title="Биолозите от 11д отново във вихъра си"><img src="{{url('gal/images/thumbs/141.jpg')}}"
                                                                       data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/151.jpg') }}" data-lightbox="image-1" data-title="Симпатягите от 11г"><img
                        src="{{url('gal/images/thumbs/151.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/161.jpg') }}" data-lightbox="image-1" data-title="Отново на училище"><img
                        src="{{url('gal/images/thumbs/161.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/171.jpg') }}" data-lightbox="image-1" data-title="Красивите мажоретки"><img
                        src="{{url('gal/images/thumbs/171.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/191.jpg') }}" data-lightbox="image-1"
               data-title="И 10д посрещат новата учебна година"><img src="{{url('gal/images/thumbs/191.jpg')}}"
                                                                     data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/211.jpg') }}" data-lightbox="image-1" data-title="Усмивки от 12а"><img
                        src="{{url('gal/images/thumbs/211.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/221.jpg') }}" data-lightbox="image-1" data-title="Г-жа Кошева с 12б"><img
                        src="{{url('gal/images/thumbs/221.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/231.jpg') }}" data-lightbox="image-1" data-title="Г-жа Топалова и 10 клас"><img
                        src="{{url('gal/images/thumbs/231.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/251.jpg') }}" data-lightbox="image-1" data-title="5а клас на МГ"><img
                        src="{{url('gal/images/thumbs/251.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/261.jpg') }}" data-lightbox="image-1"
               data-title="12а клас, устремени към завършване"><img src="{{url('gal/images/thumbs/261.jpg')}}"
                                                                    data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/281.jpg') }}" data-lightbox="image-1" data-title="11б клас"><img
                        src="{{url('gal/images/thumbs/281.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/291.jpg') }}" data-lightbox="image-1" data-title="Г-жа Кръстанова и седми клас"><img
                        src="{{url('gal/images/thumbs/291.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/301.jpg') }}" data-lightbox="image-1" data-title="Откриване на учебната година"><img
                        src="{{url('gal/images/thumbs/301.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/311.jpg') }}" data-lightbox="image-1" data-title="12 клас"><img
                        src="{{url('gal/images/thumbs/311.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/321.jpg') }}" data-lightbox="image-1"
               data-title="Слово произнесе г-н Велков - директор на МГ"><img src="{{url('gal/images/thumbs/321.jpg')}}"
                                                                             data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/331.jpg') }}" data-lightbox="image-1" data-title="12б с класната си"><img
                        src="{{url('gal/images/thumbs/331.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/341.jpg') }}" data-lightbox="image-1" data-title="Стаси и Йо"><img
                        src="{{url('gal/images/thumbs/341.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/351.jpg') }}" data-lightbox="image-1" data-title="Киприте от 12б"><img
                        src="{{url('gal/images/thumbs/351.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/361.jpg') }}" data-lightbox="image-1"
               data-title="Усмивки от Йоанна и г-жа Сиракова"><img src="{{url('gal/images/thumbs/361.jpg')}}"
                                                                   data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/371.jpg') }}" data-lightbox="image-1"
               data-title="Габриела от 12г - невероятният глас на училището"><img
                        src="{{url('gal/images/thumbs/371.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/381.jpg') }}" data-lightbox="image-1" data-title="12г клас"><img
                        src="{{url('gal/images/thumbs/381.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/391.jpg') }}" data-lightbox="image-1" data-title="Г-жа Манчева с 12б"><img
                        src="{{url('gal/images/thumbs/391.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/401.jpg') }}" data-lightbox="image-1"
               data-title="Поздрав от мажоретния състав при МГ"><img src="{{url('gal/images/thumbs/401.jpg')}}"
                                                                     data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/411.jpg') }}" data-lightbox="image-1"
               data-title="Усмивки от Йоанна и г-н Бояджиев"><img src="{{url('gal/images/thumbs/411.jpg')}}"
                                                                  data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/431.jpg') }}" data-lightbox="image-1"
               data-title="Добре дошли в училище, петокласници!"><img src="{{url('gal/images/thumbs/431.jpg')}}"
                                                                      data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/461.jpg') }}" data-lightbox="image-1" data-title="15.09.2015"><img
                        src="{{url('gal/images/thumbs/461.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/471.jpg') }}" data-lightbox="image-1" data-title="Целувки от Даниела - 12в"><img
                        src="{{url('gal/images/thumbs/471.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/481.jpg') }}" data-lightbox="image-1" data-title="Абитуриентите от 12б"><img
                        src="{{url('gal/images/thumbs/481.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/491.jpg') }}" data-lightbox="image-1" data-title="Г-жа Сиракова с 12в"><img
                        src="{{url('gal/images/thumbs/491.jpg')}}" data-lightbox="image-1"/></a>
            <a href="{{ url('gal/images/501.jpg') }}" data-lightbox="image-1"
               data-title="Последен първи учебен ден"><img src="{{url('gal/images/thumbs/501.jpg')}}"
                                                           data-lightbox="image-1"/></a>
        </div>
    </div>

    <script src="{{ url('gal/js/lightbox-plus-jquery.js') }}"></script>
    </body>


@stop



