@extends('admin-app')
@section('admin-content')
    <div class="col-md-10">
        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов клас</div>
            <div class="panel-body">
                        {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('class_name','Клас:', ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-6">
                                {!! Form::text('class_name', null,['class' => 'form-control', 'placeholder' => 'например: 8а' ]) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('profile_id','Избери профил:', ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-6">
                                    {!! Form::select('profile_id', $profiles, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                <div align="center">
                    {!! Form::submit('Запиши', ['class' => 'btn btn-default']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" id="admin-heading">Списък с класове</div>
            <table class="table table-responsive table-striped" id="admin-table">
                <thead>
                <tr>
                    <th>Име:</th>
                    <th>Профил:</th>
                    <th>Дата на добавяне:</th>
                    <th>Последна редакция:</th>
                    <th>Опции:</th>
                </tr>
                </thead>
                <tbody>
                @foreach($classes as $class)
                    <tr>
                        <td>{{ $class->name }}</td>
                        <td>{{ $class->profile->name}}</td>
                        <td>{{ $class->created_at->format('d.m.Y, H:i') }}</td>
                        <td>{{ $class->updated_at->format('d.m.Y, H:i') }}</td>
                        <td>
                            <a href="{{ url('admin/class/edit/'.$class->id) }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span> Редактирай</a>
                            <a href="{{ url('admin/class/delete/'.$class->id) }}" class="btn btn-sm btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> Изтрий</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@stop
    </div>