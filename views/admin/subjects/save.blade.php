@extends('admin-app')
@section('admin-content')
    <div class="col-md-10">
        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Редактиране на предмет</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('subject-name','Предмет:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('subject-name',$subject->name, ['class' => 'form-control' ]) !!}
                    </div>
                    <div clas="col-md-5">
                        <a href="{{url('admin/subjects')}}">
                            <button type="button" class="btn btn-default">Назад</button>
                        </a>
                        {!! Form::submit('Запази промени', ['class' => 'btn btn-default']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        @stop
    </div>