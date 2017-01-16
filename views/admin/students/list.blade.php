@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">

        @include('messages')
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов ученик</div>
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
                        {!! Form::label('class_id','Избери клас:', ['class' => 'control-label col-md-3']) !!}
                        <div class="col-md-2">
                            {!! Form::select('class_id', $classes, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('number_in_class','Номер в клас:', ['class' => 'control-label col-md-3']) !!}
                        <div class="col-md-5">
                            {!! Form::text('number_in_class', null,['class' => 'form-control', 'placeholder' => 'Номер в клас' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','Имейл на родител:', ['class' => 'control-label col-md-3']) !!}
                        <div class="col-md-5">
                            {!! Form::email('email', null,['class' => 'form-control', 'placeholder' => 'Имейл' ]) !!}
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
                            {!! Form::password('password',['class' => 'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                         {!! Form::label('password','Потвърди парола:', ['class' => 'control-label col-md-3']) !!}
                          <div class="col-md-5">
                             {!! Form::password('confirm_password',['class' => 'form-control' ]) !!}
                          </div>
                    </div>
                    <br>
                    <div align="center">
                        {!! Form::submit('Създай', ['class' => 'btn btn-default']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading" id="admin-heading">Списък с ученици</div>
            <table class="table table-responsive table-striped" id="admin-table">
                <thead>
                <tr>
                    <th>N:</th>
                    <th>Име:</th>
                    <th>Клас:</th>
                    <th>Имейл:</th>
                    <th>Потр. име:</th>
                    <th>Дата на добавяне:</th>
                    <th>Последна редакция:</th>
                    <th>Опции:</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->number_in_class }}</td>
                        <td>{{ $student->full_name }}</td>
                        <td>{{ $student->classes()->name}}</td>
                        <td>{{ $student->email}}</td>
                        <td>{{ $student->username}}</td>
                        <td>{{ $student->created_at->format('d.m.Y, H:i') }}</td>
                        <td>{{ $student->updated_at->format('d.m.Y, H:i') }}</td>
                        <td>
                            <a href="{{ url('admin/student/edit/'.$student->id) }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span> Редактирай</a>
                            <a href="{{ url('admin/student/delete/'.$student->id) }}" class="btn btn-sm btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> Изтрий</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop