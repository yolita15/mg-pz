@extends('teacher-app')
@section('teacher-content')

    <div class="col-md-9">
        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading">Имейл</div>
            <div class="panel-body">

                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('to','До родител на:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-6">
                        {!! Form::select('to', $parent, null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('subject','Тема:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('subject', null,['class' => 'form-control' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('text','Съдържание:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-6">
                        {!! Form::textarea('text', null,['class' => 'form-control' ]) !!}
                    </div>
                </div>
                <div align="center">
                    {!! Form::submit('Изпрати', ['class' => 'btn btn-default']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        @stop
    </div>