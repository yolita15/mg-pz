@extends('teacher-app')
@section('teacher-content')

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading" id="admin-heading">Оценки</div>
                <table class="table table-responsive table-striped" id="admin-table">
                    <thead>
                    <tr>
                        <th>Ученик:</th>
                        <th>Предмет:</th>
                        <th>Оценка:</th>
                        <th>Добавена:</th>
                        <th>Последна редакция:</th>
                        <th>Опции:</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($marks as $mark)
                    <tr>
                    <td>{{ $mark->user()->full_name }} - {{ $mark->user()->classes()->name }}</td>
                    <td>{{ $mark->subject()->name}}</td>
                        <td>{{ $mark->mark}} - {{$mark->markType()->type}}</td>
                    <td>{{ $mark->created_at->format('d.m.Y, H:i') }}</td>
                    <td>{{ $mark->updated_at->format('d.m.Y, H:i') }}</td>
                        <td>
                            <a href="{{ url('educator/edit/'.$mark->id) }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span> Редактирай</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <br><br>
    </div>


@stop