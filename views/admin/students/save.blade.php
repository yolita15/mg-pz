@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">

        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов ученик</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('first_name','Име:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::text('first_name', $student->first_name,['class' => 'form-control', 'placeholder' => 'Име' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('last_name','Фамилия:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::text('last_name', $student->last_name,['class' => 'form-control', 'placeholder' => 'Фамилия' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('class_id','Избери клас:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-2">
                        {!! Form::select('class_id', $classes, null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('number_in_class','Номер в клас:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::text('number_in_class', $student->number_in_class,['class' => 'form-control', 'placeholder' => 'Номер в клас' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('email','Имейл на родител:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::email('email', $student->email,['class' => 'form-control', 'placeholder' => 'Имейл' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('password','Парола:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::password('password',['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('confirm_password','Потвърди парола:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::password('confirm_password',['class' => 'form-control']) !!}
                    </div>
                </div>
                <br>
                <div align="center">
                    <a href="{{url('admin/students')}}">
                        <button type="button" class="btn btn-default">Назад</button>
                    </a>
                    {!! Form::submit('Запази промени', ['class' => 'btn btn-default']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
@stop