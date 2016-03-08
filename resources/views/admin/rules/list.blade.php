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
                    {!! Form::submit('Запиши', ['class' => 'btn btn-default']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" id="admin-heading">Списък с ученици</div>
            <table class="table table-responsive table-striped" id="admin-table">
                <thead>
                <tr>
                    <th>Име:</th>
                    <th>Предмет:</th>
                    <th>Клас:</th>
                    <th>Дата на добавяне:</th>
                    <th>Последна редакция:</th>
                    <th>Опции:</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rules as $rule)
                    <tr>
                        <td>{{ $rule->user()->full_name}}</td>
                        <td>{{ $rule->subject->name}}</td>
                        <td>{{ $rule->classes()->name}}</td>
                        <td>{{ $rule->created_at->format('d.m.Y, H:i') }}</td>
                        <td>{{ $rule->updated_at->format('d.m.Y, H:i') }}</td>
                        <td>
                            <a href="{{ url('admin/rules/edit/'.$rule->id) }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span> Редактирай</a>
                            <a href="{{ url('admin/rules/delete/'.$rule->id) }}" class="btn btn-sm btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> Изтрий</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>
@stop