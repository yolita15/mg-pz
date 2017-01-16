@extends('teacher-app')
@section('teacher-content')

    <div class="col-md-9">
        @include('messages')
        <table class="table table-responsive table-striped" id="admin-table">
            <thead>
            <tr>
                <th>Клас:</th>
                <th>N:</th>
                <th>Име:</th>
                <th>Предмет:</th>
                <th>Оценка:</th>
                <th>Тип на оценката:</th>

            </tr>
            </thead>
            <tbody>
            {!! Form::open(['action' => 'Educator\AddMarkController@postAddMark', 'class' => 'form-horizontal']) !!}
            <?php $i = 0; ?>
            @foreach($students as $student)
                @foreach($class as $classes)
                    @foreach($sub as $subject)
                        <tr>

                            <td>
                                {{$classes->name}}
                            </td>
                            <td>
                                {{$student->number_in_class}}
                            </td>
                            <td>
                                {{$student->full_name}}
                            </td>
                            <td>
                                {{$subject->name}}
                            </td>
                            <td>
                                {!! Form::text('entry['.$i.'][mark]',null, ['class'=>'form-control col-md-2']) !!}
                            </td>
                            <td>
                                {!! Form::select('entry['.$i.'][markType]', $markType, null, ['class'=>'form-control']) !!}
                            </td>
                            <td>
                                {!! Form::hidden('entry['.$i.'][student_id]', $student->id) !!}
                            </td>
                            <td>
                                {!! Form::hidden('entry['.$i.'][subject_id]', $subject->id) !!}
                            </td>

                        </tr>
                        <?php $i++; ?>
                    @endforeach
                @endforeach
            @endforeach
            </tbody>
        </table>

        <div align="center">
            <a href="{{url('educator/class-subject')}}">
                <button type="button" class="btn btn-default">Назад</button>
            </a>
            {!! Form::submit('Запиши', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
        <br><br><br>
        <br>
        <br>
        <br>
    </div>

@stop
