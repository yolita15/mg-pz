@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">
        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов предмет</div>
            <div class="panel-body">
                {!! Form::open(['method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('subject-name','Предмет:', ['class' => 'control-label col-md-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('subject-name', null,['class' => 'form-control', 'placeholder' => 'например: Математика' ]) !!}
                    </div>
                    <div clas="col-md-5">
                        {!! Form::submit('Запиши', ['class' => 'btn btn-default']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" id="admin-heading">Списък с предмети</div>
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
                @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->created_at->format('d.m.Y, H:i') }}</td>
                        <td>{{ $subject->updated_at->format('d.m.Y, H:i') }}</td>
                        <td>
                            <a href="{{ url('admin/subjects/edit/'.$subject->id) }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span> Редактирай</a>
                            <a href="{{ url('admin/subjects/delete/'.$subject->id) }}" class="btn btn-sm btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> Изтрий</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



@stop
    </div>