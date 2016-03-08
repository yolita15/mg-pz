@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">
        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Редактиране на тип оценка</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('marktype','Тип оценка:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('marktype', $marktype->type,['class' => 'form-control', 'placeholder' => 'например: Тест' ]) !!}
                    </div>
                    <div clas="col-md-5">
                        <a href="{{url('admin/marktype')}}"><button type="button" class="btn btn-default">Назад</button></a>
                        {!! Form::submit('Запази промени', ['class' => 'btn btn-default']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>


        @stop
    </div>