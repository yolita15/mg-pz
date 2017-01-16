@extends('admin-app')
@section('admin-content')

    <div class="col-md-10">
        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading">Редактиране на клас</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('class_name','Клас:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('class_name', $class->name,['class' => 'form-control', 'placeholder' => 'например: 8а' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('profile_id','Избери профил:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-6">
                        {!! Form::select('profile_id', $profiles, null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div align="center">
                    <a href="{{url('admin/class')}}">
                        <button type="button" class="btn btn-default">Назад</button>
                    </a>
                    {!! Form::submit('Запази промени', ['class' => 'btn btn-default']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        @stop
    </div>