@extends('teacher-app')
@section('teacher-content')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading">Изберете клас и предмет</div>
            <div class="panel-body">
                <br>
                {!! Form::open(['action' => 'Educator\AddMarkController@getAddMark', 'class' => 'form-horizontal', 'method'=>'get']) !!}
                <div class="form-group">
                    {!! Form::label('class','Клас:', ['class'=>'control-label col-md-4']) !!}
                    <div class="col-md-4">
                        {!! Form::select('class', $class, null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('subject','Предмет:', ['class'=>'control-label col-md-4']) !!}
                    <div class="col-md-4">
                        {!! Form::select('subject', $subject, null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div align="center">
                    <br>
                    <br>
                    {!! Form::submit('Избери', ['class' => 'btn btn-default']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <br><br><br>

        @stop
    </div>