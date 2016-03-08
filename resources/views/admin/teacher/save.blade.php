@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">

        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов учител</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('first_name','Име:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::text('first_name', $teacher->first_name,['class' => 'form-control', 'placeholder' => 'Име' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('last_name','Фамилия:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::text('last_name', $teacher->last_name,['class' => 'form-control', 'placeholder' => 'Фамилия' ]) !!}
                    </div>
                </div>
                <br>
                <div align="center">
                    <a href="{{url('admin/teacher')}}"><button type="button" class="btn btn-default">Назад</button></a>
                    {!! Form::submit('Запази промени', ['class' => 'btn btn-default']) !!}
                </div>
            </div>
        </div>

    </div>
@stop