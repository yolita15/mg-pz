@extends('student-app')

@section('student-content')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading">Оценки</div>
        <table class="table table-responsive table-striped" id="admin-table">
            <thead>
            <tr>
                <th>Предмет:</th>
                <th>Оценка:</th>
                <th>Добавена:</th>
                <th>Последна редакция:</th>
            </tr>
            </thead>
            <tbody>
            @foreach($marks as $mark)
                <tr>

                    <td>{{ $mark->subject()->name }}</td>

                    <td>{{ $mark->mark }} - {{ $mark->markType()->type }} </td>
                    <td>{{ $mark->created_at->format('d.m.Y, H:i')}}</td>
                    <td>{{ $mark->updated_at->format('d.m.Y, H:i')}}</td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    </div>

@stop