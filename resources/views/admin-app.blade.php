@extends('app')

@section('content')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-2">

                <ul class="nav nav-stacked">
                    <li><a href="{{ url('admin') }}" class="btn btn-default {{ set_active_admin(['admin']) }}" id="admin-btn">Админ</a></li>
                    <hr id="hr1">
                    <li><a href="{{ url('admin/profile') }}" class="btn btn-default {{ set_active_admin(['admin/profile']) }}" id="admin-btn">Профил</a></li>
                    <br>
                    <li><a href="{{ url('admin/class') }}" class="btn btn-default {{ set_active_admin(['admin/class']) }}" id="admin-btn">Клас</a></li>
                    <br>
                    <li><a href="{{ url('admin/subjects') }}" class="btn btn-default {{ set_active_admin(['admin/subjects']) }}" id="admin-btn">Предмети</a></li>
                    <br>
                    <li><a href="{{ url('admin/student') }}" class="btn btn-default {{ set_active_admin(['admin/student']) }}" id="admin-btn">Ученик</a></li>
                    <br>
                    <li><a href="{{ url('admin/teacher') }}" class="btn btn-default {{ set_active_admin(['admin/teacher']) }}" id="admin-btn">Учител</a></li>
                    <br>
                    <li><a href="{{ url('admin/rules') }}" class="btn btn-default {{ set_active_admin(['admin/rules']) }}" id="admin-btn">
                            Изучаване на <br> учебните <br> предмети
                        </a>
                    </li>
                    <br>
                    <li><a href="{{ url('admin/marktype') }}" class="btn btn-default {{ set_active_admin(['admin/marktype']) }}" id="admin-btn">Тип оценки</a></li>
                    <hr id="hr1">
                    <li><a href="{{ url('logout') }}" class="btn btn-default {{ set_active_admin(['admin/logout']) }}" id="admin-btn">
                            <span class="glyphicon glyphicon-log-out"></span> Изход</a></li>
                    <br>

                </ul>
                <br><br><br>
            </div>
            @yield('admin-content')
        </div>
    </div>
@stop