@extends('teacher-app')
@section('teacher-content')

    <div class="col-md-9">
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading">Срочни и годишни оценки</div>
            <div class="panel-body">
                <div class="col-md-6">
                    @include('messages')
                    <div align="center">
                        Срочни оценки
                    </div>
                    <br><br>
                    Отличен:
                    @foreach($excellent as $six)
                        {{$six->user()->full_name}}
                    @endforeach
                    <br>
                    Много добър:
                    @foreach($very_good as $five)
                        {{$five->user()->full_name}}
                    @endforeach
                    <br>
                    Добър:
                    @foreach($good as $four)
                        {{$four->user()->full_name}}
                    @endforeach
                    <br>
                    Среден:
                    @foreach($bad as $three)
                        {{$three->user()->full_name}}
                    @endforeach
                    <br>
                    Слаб:
                    @foreach($very_bad as $two)
                        {{$two->user()->full_name}}
                    @endforeach
                    <br><br>
                </div>
                <div class="col-md-6">
                    <div align="center">
                        Годишни оценки
                    </div>
                    <br><br>
                    Отличен:
                    @foreach($excellent_year as $six)
                        {{$six->user()->full_name}}
                    @endforeach
                    <br>
                    Много добър:
                    @foreach($very_good_year as $five)
                        {{$five->user()->full_name}}
                    @endforeach
                    <br>
                    Добър:
                    @foreach($good_year as $four)
                        {{$four->user()->full_name}}
                    @endforeach
                    <br>
                    Среден:
                    @foreach($bad_year as $three)
                        {{$three->user()->full_name}}
                    @endforeach
                    <br>
                    Слаб:
                    @foreach($very_bad_year as $two)
                        {{$two->user()->full_name}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
