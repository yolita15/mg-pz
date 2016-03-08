@extends('teacher-app')
@section('teacher-content')

    <div class="col-md-8">
        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Напиши оценка</div>
            <div class="panel-body">
        {!! Form::open(['action' => 'Educator\AccountController@markStudent', 'class' => 'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('profile_id','Ученик:', ['class' => 'control-label col-md-4']) !!}
            <div class="col-md-4">
                {!! Form::select('userStu', $studentss, null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">

            {!! Form::label('mark','Оценка:', ['class' => 'control-label col-md-4']) !!}

            <div class="col-md-2">
                {!! Form::text('mark',null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('profile_id','Тип оценка:', ['class' => 'control-label col-md-4']) !!}
            <div class="col-md-4">
                {!! Form::select('markType', $markType, null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('stuSub','Предмет:', ['class' => 'control-label col-md-4']) !!}
            <div class="col-md-5">
                {!! Form::select('stuSub', $sub, null, ['class'=>'form-control']) !!}
            </div>

        </div>
        <br>
        <div align="center">
            <a href="{{url('educator/class-subject')}}"><button type="button" class="btn btn-default">Назад</button></a>
            {!! Form::submit('Запиши', ['class' => 'btn btn-default']) !!}

        </div>
        {!! Form::close() !!}
        </div>
        </div>
    </div>


@stop
