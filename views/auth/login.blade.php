@extends('app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('css/loginstyle.css') }}">
    <div class="container">

        <div class="inner-screen">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4" align="center">
                    @include('messages')
                </div>
            </div>
            {!! Form::open([
                'url' => 'login',
                'class' => 'form'
            ]) !!}
            {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Потребителско име']) !!}
            {!! Form::password('password', ['class' => 'form-control','placeholder' => 'Парола']) !!}
            {!! Form::submit('Вход') !!}
            {!! Form::close() !!}
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


@stop
