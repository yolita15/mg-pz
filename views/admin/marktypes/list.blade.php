@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">
        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на тип оценка</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('marktype','Тип оценка:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('marktype', null,['class' => 'form-control', 'placeholder' => 'например: Тест' ]) !!}
                    </div>
                    <div clas="col-md-5">
                        {!! Form::submit('Създай', ['class' => 'btn btn-default']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" id="admin-heading">Списък с типове оценки</div>
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
                @foreach($marktypes as $marktype)
                    <tr>
                        <td>{{ $marktype->type }}</td>
                        <td>{{ $marktype->created_at->format('d.m.Y, H:i') }}</td>
                        <td>{{ $marktype->updated_at->format('d.m.Y, H:i') }}</td>
                        <td>
                            <a href="{{ url('admin/marktype/edit/'.$marktype->id) }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span> Редактирай</a>
                            <a href="{{ url('admin/marktype/delete/'.$marktype->id) }}" class="btn btn-sm btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> Изтрий</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        @stop
    </div>