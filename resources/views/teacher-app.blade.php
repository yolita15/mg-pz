@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <div class="panel panel-default ">
                    <div class="panel-body account">
                        <div align="center">
                            <a href="{{url('educator/account')}}" class="username"><img src="{{ url('images/user.png') }}" width="100"  ></a>
                            <br>
                            <span class="username">
                            {{$user->username}}
                            </span>
                            <br>
                            <hr id="hr1">
                            <span class="username">
                            {{$user->full_name}}
                            </span>
                            <br>
                            <br>
                            <span class="username">
                                <span class="glyphicon glyphicon-calendar"></span> {{date('d.m.Y г.')}}
                            </span>
                            <br>
                            <hr id="hr2">
                            <span class="username">
                                <a href="{{url('educator/class-subject')}}" class="username"><span class="glyphicon glyphicon-pencil"></span> Напиши оценка </a>
                            </span>
                            <br>
                            <br>
                            <span class="username">
                                <a href="{{url('educator/added')}}" class="username"><span class="glyphicon glyphicon-list-alt"></span> Оценки </a>
                            </span>
                            <br>
                            <br>
                            <span class="username">
                                <a href="{{url('logout')}}" class="username"><span class="glyphicon glyphicon-log-out"></span> Изход </a>
                            </span>


                        </div>
                    </div>
                </div>

            </div>

            @yield('teacher-content')
        </div>

    </div>
@stop