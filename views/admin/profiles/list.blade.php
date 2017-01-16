@extends('admin-app')
@section('admin-content')
    <div class="col-md-10">

        @include('messages')

        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов профил</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('name','Профил:', ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'например: ИТ, Математика, АЕ' ]) !!}
                            </div>
                            <div clas="col-md-5">
                                {!! Form::submit('Запиши', ['class' => 'btn btn-default']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" id="admin-heading">Списък с профили</div>
                <table class="table table-responsive table-striped" id="admin-table">
                    <thead>
                    <tr>
                        <th>Име:</th>
                        <th>Дата на добавяне:</th>
                        <th>Последна редакция:</th>
                        <th>Опции:</th>
                    </tr>
                    </thead>
                    <tbody>
                  @foreach($profiles as $profile)
                        <tr>
                            <td>{{ $profile->name }}</td>
                            <td>{{ $profile->created_at->format('d.m.Y, H:i') }}</td>
                            <td>{{ $profile->updated_at->format('d.m.Y, H:i') }}</td>
                            <td>
                                <a href="{{ url('admin/profile/edit/'.$profile->id) }}" class="btn btn-sm btn-success">
                                    <span class="glyphicon glyphicon-edit"></span> Редактирай</a>
                                <a href="{{ url('admin/profile/delete/'.$profile->id) }}" class="btn btn-sm btn-danger">
                                    <span class="glyphicon glyphicon-trash"></span> Изтрий</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
        @stop
    </div>
