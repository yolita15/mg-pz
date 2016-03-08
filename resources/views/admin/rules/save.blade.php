@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">
        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading">Изучавани учебни предмети</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('teacher_id','Име:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::select('teacher_id', $users, null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('subject_id','Предмет:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        <div class="checkbox">
                            {!! Form::select('subject_id', $subjects, null, ['class' => 'form-control'] ) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('class_id','Клас:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        <div class="checkbox">
                            {!! Form::select('class_id', $classes, null, ['class' => 'form-control'] ) !!}
                        </div>
                    </div>
                </div>

                <div align="center">
                    <a href="{{url('admin/rules')}}"><button type="button" class="btn btn-default">Назад</button></a>
                    {!! Form::submit('Запази промени', ['class' => 'btn btn-default']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop