@extends('app')

@section('content')
    <div class="inner-screen">

        @if(Session::has('message'))
            <p>{{ Session::get('message.message')}}</p>
        @endif

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
