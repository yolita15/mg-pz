@extends('teacher-app')
@section('teacher-content')
    <div class="col-md-8">
        @include('messages')


        <div class="panel panel-default">

            <div class=" panel-heading" id="admin-heading"> Редактиране на оценка</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('profile_id','Ученик:', ['class' => 'control-label col-md-4']) !!}
                    <div class="col-md-4">
                        {!! Form::select('stu', [$mark->user()->full_name], null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">

                    {!! Form::label('profile_id','Оценка:', ['class' => 'control-label col-md-4']) !!}

                    <div class="col-md-2">
                        {!! Form::text('mark', $mark->mark, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('profile_id','Тип оценка:', ['class' => 'control-label col-md-4']) !!}
                    <div class="col-md-3">
                        {!! Form::select('type', $type, null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('profile_id','Предмет:', ['class' => 'control-label col-md-4']) !!}
                    <div class="col-md-5">
                        {!! Form::select('sub', [$mark->subject()->name], null, ['class'=>'form-control']) !!}
                    </div>

                </div>
                <br>
                <div align="center">
                    <a href="{{url('educator/added')}}"><button type="button" class="btn btn-default">Назад</button></a>
                    {!! Form::submit('Редактирай', ['class' => 'btn btn-default']) !!}

                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@stop