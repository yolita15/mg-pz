@extends('app')

@section('content')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-2">

                <ul class="nav nav-stacked">
                    <li><a href="{{ url('admin') }}" class="btn btn-default" id="admin-btn">Админ</a></li>
                    <br>
                    <li><a href="{{ url('admin/profile') }}" class="btn btn-default" id="admin-btn">Профил</a></li>
                    <br>
                    <li><a href="{{ url('admin/class') }}" class="btn btn-default" id="admin-btn">Клас</a></li>
                    <br>
                    <li><a href="{{ url('admin/subjects') }}" class="btn btn-default" id="admin-btn">Предмети</a></li>
                    <br>
                    <li><a href="{{ url('admin/student') }}" class="btn btn-default" id="admin-btn">Ученик</a></li>
                    <br>
                    <li><a href="{{ url('admin/teacher') }}" class="btn btn-default" id="admin-btn">Учител</a></li>
                    <br>
                    <li><a href="{{ url('admin/studiedsubjects') }}" class="btn btn-default" id="admin-btn">
                            Изучаване на <br> учебните <br> предмети
                        </a>
                    </li>
                    <br>
                    <li><a href="{{ url('logout') }}" class="btn btn-default" id="admin-btn">Изход</a></li>
                    <br>
                </ul>
            </div>
            @yield('admin-content')
        </div>
    </div>
@stop