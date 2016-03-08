@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">

        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов учител</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('first_name','Име:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::text('first_name', null,['class' => 'form-control', 'placeholder' => 'Име' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('last_name','Фамилия:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::text('last_name', null,['class' => 'form-control', 'placeholder' => 'Фамилия' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('username','Потребителско име:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::text('username', null,['class' => 'form-control', 'placeholder' => 'ivan.ivanov' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('password','Парола:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-5">
                        {!! Form::text('password', null,['class' => 'form-control', 'placeholder' => 'ЕГН' ]) !!}
                    </div>
                </div>
                <br>
                <div align="center">
                    {!! Form::submit('Създай', ['class' => 'btn btn-default']) !!}
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" id="admin-heading">Списък с учители</div>
            <table class="table table-responsive table-striped" id="admin-table">
                <thead>
                <tr>
                    <th>Име:</th>
                    <th>Фамилия:</th>
                    <th>Потребителско име:</th>
                    <th>Дата на добавяне:</th>
                    <th>Последна редакция:</th>
                    <th>Опции:</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $teacher)
                    <tr>
                        <td>{{ $teacher->first_name }}</td>
                        <td>{{ $teacher->last_name}}</td>
                        <td>{{ $teacher->username}}</td>
                        <td>{{ $teacher->created_at->format('d.m.Y, H:i') }}</td>
                        <td>{{ $teacher->updated_at->format('d.m.Y, H:i') }}</td>
                        <td>
                            <a href="{{ url('admin/teacher/edit/'.$teacher->id) }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span> Редактирай</a>
                            <a href="{{ url('admin/teacher/delete/'.$teacher->id) }}" class="btn btn-sm btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> Изтрий</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop