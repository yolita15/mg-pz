@extends('app')

@section('content')

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
            {!! Form::text('username', null, ['placeholder' => 'Потребителско име']) !!}
            {!! Form::password('password', ['placeholder' => 'Парола']) !!}
            {!! Form::submit('Вход') !!}
            {!! Form::close() !!}
    </div>

    <link rel="stylesheet" type="text/css" href="{{ url('css/loginstyle.css') }}">
@stop
